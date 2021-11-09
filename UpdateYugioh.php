<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php


try {
  require "config.php";
  

  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM YugiohCards";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();

} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
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
  <th>CardAttribute</th>
  <th>Edit</th>
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
<td><?php echo ($row["CardAttribute"]); ?> </td>
<td><a href="updateYGHsingle.php?id=<?php echo ($row["id"]); ?>">Edit</a></td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
    <a href="index.php">Home</a>
</body>
</html>