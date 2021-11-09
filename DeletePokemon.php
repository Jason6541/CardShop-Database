<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    
    require "config.php";
if (isset($_GET["id"])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $id = $_GET["id"];

    $sql = "DELETE FROM Cards WHERE id = :id";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $success = "Card successfully deleted";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

try {
  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM Cards";

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
<td><?php echo ($row["CardType"]); ?> </td>
<td><a href="DeletePokemon.php?id=<?php echo ($row["id"]); ?>">Delete</a></td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
    <a href="index.php">Back to home</a>
</body>
</html>