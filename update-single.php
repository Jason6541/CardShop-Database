<?php
/**
  * Use an HTML form to edit an entry in the
  * users table.
  *
  */
require "config.php";

if (isset($_POST['submit'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
    $Card =[
      "id"        => $_POST['id'],
      "CardName" => $_POST['CardName'],
      "SetName"  => $_POST['SetName'],
      "CardNumber" => $_POST['CardNumber'],
      "CardCondition"  => $_POST['CardCondition'],
      "CardQuantity"  => $_POST['CardQuantity'],
      "CardPrice"      => $_POST['CardPrice'],
      "CardRarity"      => $_POST['CardRarity'],
      "CardType"      => $_POST['CardType']
    ];

    $sql = "UPDATE Cards
            SET id = :id,
              CardName = :CardName,
              SetName = :SetName,
              CardNumber = :CardNumber,
              CardCondition = :CardCondition,
              CardQuantity = :CardQuantity,
              CardPrice = :CardPrice,
              CardRarity = :CardRarity,
              CardType = :CardType
            WHERE id = :id";

  $statement = $connection->prepare($sql);
  $statement->execute($Card);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}

if (isset($_GET['id'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cards WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $Card = $statement->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
} else {
    echo "Something went wrong!";
    exit;
}
?>


<?php if (isset($_POST['submit']) && $statement) : ?>
  <?php echo ($_POST['CardName']); ?> successfully updated.
<?php endif; ?>

<h2>Edit a Card</h2>

<form method="post">
    <?php foreach ($Card as $key => $value) : ?>
      <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
      <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo ($value); ?>" <?php echo ($key === 'id' ? 'readonly' : null); ?>>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>
