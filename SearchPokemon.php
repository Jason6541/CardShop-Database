<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

if (isset($_POST['submit'])) {
  try {
    require "config.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT *
    FROM Cards
    WHERE CardName = :CardName";

    $CardName = $_POST['CardName'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':CardName', $CardName, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
<tr>
  <th>#</th>
  <th>CardName</th>
  <th>SetName</th>
  <th>CardNumber</th>
  <th>CardCondition</th>
  <th>CardQuantity</th>
  <th>CardPrice</th>
  <th>CardRarity</th>
  <th>CardType</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo ($row["id"]); ?></td>
<td><?php echo ($row["CardName"]); ?></td>
<td><?php echo ($row["SetName"]); ?></td>
<td><?php echo ($row["CardNumber"]); ?></td>
<td><?php echo ($row["CardCondition"]); ?></td>
<td><?php echo ($row["CardQuantity"]); ?></td>
<td><?php echo ($row["CardPrice"]); ?> </td>
<td><?php echo ($row["CardRarity"]); ?> </td>
<td><?php echo ($row["CardType"]); ?> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['CardName']); ?>.
  <?php }
} ?>
<h2>Find Pokemon Card Based On Name</h2>

    <form method="post">
    	<label for="name">Name</label>
    	<input type="text" id="CardName" name="CardName">
    	<input type="submit" name="submit" value="View Results">
    </form>

    
    <a href="index.php">Back to home</a>

</body>
</html>