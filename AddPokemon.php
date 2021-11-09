<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php    
if (isset($_POST['submit'])) {
  require "config.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);
   
    $new_card = array(
  "CardName" => $_POST['CardName'],
  "SetName"  => $_POST['SetName'],
  "CardNumber" => $_POST['CardNumber'],
  "CardCondition" => $_POST['CardCondition'],
  "CardQuantity"  => $_POST['CardQuantity'],
    "CardPrice" => $_POST['CardPrice'],
    "CardRarity" => $_POST['CardRarity'],
        "CardType" => $_POST['CardType']
    );

    $sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "Cards",
    implode(", ", array_keys($new_card)),
    ":" . implode(", :", array_keys($new_card))
);

$statement = $connection->prepare($sql);
$statement->execute($new_card);
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

}
    if (isset($_POST['submit']) && $statement) {
        echo $_POST['CardName'];
        echo " Succesfully Added";
    }
    
    
 ?>
    
    
    

<form  method="post">
 Card Name: <input type="text" name="CardName" id="CardName"><br>
<select id="SetName">
  <option value="BaseSet">Base Set</option>
  <option value="Fossil">Fossil</option>
  <option value="Jungle">Jungle</option>
  <option value="GymChallenge">Gym Challenge</option>
  <option value="Gym Heros">Gym Heros</option>
  <option value="Neo Genesis">Neo Genesis</option>
  <option value="Team Rocket">Team Rocket</option>
  <option value="Neo Discovery">Neo Discovery</option>
  <option value="Neo Revelation">Neo Revelation</option>
  <option value="Expedition">Expedition</option>
  <option value="Legendary Collection">Legendary Collection</option>
  <option value="Neo Destiny">Neo Destiny</option>
  <option value="Aquapolis">Aquapolis</option>
  <option value="Dragon">Dragon</option>
  <option value="Ruby and Sapphire">Ruby and Sapphire</option>
  <option value="Sandstorm">Sandstorm</option>
  <option value="audi">Sky Ridge</option>
  <option value="audi">Fire Red and Leaf Green</option>
  <option value="audi">Hidden Legends</option>
  <option value="audi">Team Magma vs Team Aqua</option>
  <option value="audi">Team Rocket Returns</option>
  <option value="audi">Delta Species</option>
  <option value="audi">Deoxys</option>
  <option value="audi">Emerald</option>
  <option value="audi">Unseen Forces</option>
  <option value="audi">Crystal Guardians</option>
  <option value="audi">Dragon Frontiers</option>
  <option value="audi">Holon Phantoms</option>
  <option value="audi">Legend Maker</option>
  <option value="audi">Diamond & Pearl</option>
  <option value="audi">Diamond & Pearl Promos</option>
  <option value="audi">Mysterious Treasures</option>
  <option value="audi">Power Keepers</option>
  <option value="audi">Secret Wonders</option>
  <option value="audi">Great Encounters</option>
  <option value="audi">Legends Awakened</option>
  <option value="audi">Majestic Dawn</option>
  <option value="audi">Stormfront</option>
  <option value="audi">Arceus</option>
  <option value="audi">Platinum Base Set</option>
  <option value="audi">Rising Rivals</option>
  <option value="audi">Supreme Victors</option>
  <option value="audi">HeartGold and SoulSilver</option>
  <option value="audi">HeartGold and SoulSilver Promos</option>
  <option value="audi">Triumphant</option>
  <option value="audi">Undaunted</option>
  <option value="audi">Unleashed</option>
  <option value="audi">Black and White Base Set</option>
  <option value="audi">Call of Legends </option>
  <option value="audi">Emerging Powers</option>
  <option value="audi">Noble Victories</option>
  <option value="audi">Boundaries Crossed</option>
  <option value="audi">Dark Explorers</option>
  <option value="audi">Dragon Vault</option>
  <option value="audi">Dragons Exalted</option>
  <option value="audi">Next Destinies</option>
  <option value="audi">Kalos Starter Set</option>
  <option value="audi">Legendary Treasures</option>
  <option value="audi">Plasma Blast</option>
  <option value="audi">Plasma Freeze</option>
  <option value="audi">Plasma Storm</option>
  <option value="audi">XY - Promos</option>
  <option value="audi">Flash Fire</option>
  <option value="audi">Furious Fists</option>
  <option value="audi">Phantom Forces</option>
  <option value="audi">XY</option>
  <option value="audi">Ancient Origins</option>
  <option value="audi">BREAKthrough</option>
  <option value="audi">Double Crisis</option>
  <option value="audi">Primal Clash</option>
  <option value="audi">Roaring Skies</option>
  <option value="audi">BREAKpoint</option>
  <option value="audi">Evolutions</option>
  <option value="audi">Fates Collide</option>
  <option value="audi">Generations</option>
  <option value="audi">Steam Siege</option>
  <option value="audi">Sun & Moon Promos</option>
  <option value="audi">Burning Shadows</option>
  <option value="audi">Crimson Invasion</option>
  <option value="audi">Guardians Rising</option>
  <option value="audi">Shining Legends</option>
  <option value="audi">Sun & Moon</option>
  <option value="audi">Celestial Storm</option>
  <option value="audi">Dragon Majesty</option>
  <option value="audi">Forbidden Light</option>
  <option value="audi">Lost Thunder</option>
  <option value="audi">Ultra Prism</option>
  <option value="audi">Detective Pikachu</option>
  <option value="Team Up">Team Up</option>
  <option value="Unbroken Bonds">Unbroken Bonds</option>
  <option value="Unified Minds">Unified Minds</option>
  <option value="McDonalds 2011">McDonalds 2011</option>
  <option value="McDonalds 2012">McDonalds 2012</option>
  <option value="McDonalds 2013">McDonalds 2013</option>
  <option value="McDonalds 2014">McDonalds 2014</option>
  <option value="McDonalds 2015">McDonalds 2015</option>
  <option value="McDonalds 2016">McDonalds 2016</option>
  <option value="McDonalds 2017">McDonalds 2017</option>
  <option value="McDonalds 2018">McDonalds 2018</option>
</select>
    <br>
Card Number: <input type="text" name="CardNumber" id="CardNumber">
    <br>
Card Condition: <input type="text" name="CardCondition" id="CardCondition">
    <br>
Card Quantity: <input type="text" name="CardQuantity" id="CardQuantity">
<br>
Card Price:<input type="text" name="CardPrice" id="CardPrice">
<br>
Card Rarity: <input type="text" name="CardRarity" id="CardRarity">
<br>
Card Type: <input type="text" name="CardType" id="CardType">
<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Home</a>

</body>
</html>