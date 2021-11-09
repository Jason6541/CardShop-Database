<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE CardWorld";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

$dbname = "CardWorld";

// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 

$errors = [];

$table1 = "CREATE TABLE CARDS (
    CardID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CardName VARCHAR(30) NOT NULL,
    Set VARCHAR(40) NOT NULL,
    CardNo VARCHAR(5),
    CardCondition CHAR(128) NOT NULL,
    Stock INT(6),
	Price DEC(11,2),
	Rarity VARCHAR(20)
	)";

$table2 = "CREATE TABLE SETS (
    SetID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    SetName VARCHAR(30) NOT NULL,
    NoCards INT(6) NOT NULL,
	Game VARCHAR(30) NOT NULL
    )";

$table3 = "CREATE TABLE GAME(
	GameID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NoSets INT(6)
	)";
	
$table4 = "CREATE TABLE ORDERS (
	OrderID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	CustomerID INT(6),
	Game VARCHAR(30) NOT NULL,
	Set VARCHAR(30) NOT NULL,
	CardName VARCHAR(30) NOT NULL,
	CardNo INT(6),
	Quantity INT(6),
	Price DEC(11,2)
	)";

$table5 = "CREATE TABLE CUSTOMER (
	CustomerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	AcountNo INT(6) NOT NULL,
	Password VARCHAR(30) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	)";
	
$table6 = "CREATE TABLE EMPLOYEE (
	EmployeeID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	PhoneNo INT(10),
	Email VARCHAR(30) NOT NULL,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	HrsWorked INT(6),
	)";
	


$tables = [$table1, $table2, $table3, $table4, $table5, $table6];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

$conn2->close();

?>
<div><a href="index.php">Home</a></div>
</body>
</html>