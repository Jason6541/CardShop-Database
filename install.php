<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require "config.php";

try {
  $connection = new PDO("mysql:host=$host", $username, $password, $options);
  $sql = file_get_contents("init.sql");
  $connection->exec($sql);

  echo "Database and table Cards and YugiohCards created successfully.";
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
    <a href="index.php">Back to home</a>
</body>
</html>