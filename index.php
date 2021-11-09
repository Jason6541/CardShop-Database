<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background: red;
  padding: 16px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 250px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<div id="database">
<!--<a href="CreateDatabase.php">*****CreateDatabase*****</a>-->
<!--<a href="CreateTable.php">*****CreateTables*****</a> -->
</div>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">Options</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>What Do You Want TO DO?</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Add Card</h3>
          <a href="AddPokemon.php">Pokemon</a>
          <a href="AddYugioh.php">Yugioh</a>
          <a href="#">Magic The Gathering</a>
		  <a href="#">Dragon Ball Super Card Game</a>
        </div>
       <!-- <div class="column">
          <h3>Add Game</h3>
          <a href="#">Game Add</a>
        </div> -->
		<div class="column">
          <h3>Add Customer</h3>
          <a href="#">Customer Add</a>
        </div>
          <div class="column">
          <h3>Search</h3>
          <a href="SearchPokemon.php">Pokemon</a>
          <a href="#">Yugioh</a>
          <a href="#">Magic the Gathering</a>
		  <a href="#">Super Dragon Ball Heros</a>
        </div>
		<div class="column">
          <h3>Other</h3>
          <a href="install.php">Install</a>
          <a href="#">Modify Page</a>
		  <a href="#">Report</a>
		  <a href="#">Query</a>
        </div>
          <div class="Update">
          <h3>Update Cards</h3>
          <a href="Update.php">Update Pokemon Cards</a>
          <a href="UpdateYugioh.php">Update Yugioh Cards</a>
        </div>
          <div class="Delete">
          <h3>Delete Pokemon Cards</h3>
          <a href="DeletePokemon.php">Delete Pokemon</a>
        </div>
          <div class="column">
          <h3>Add Set</h3>
          <a href="#">Pokemon</a>
		  <a href="#">Yugioh</a>
		  <a href="#">Magic The Gathering</a>
		  <a href="#">Dragon Ball Super Card Game</a>  
        </div>
          <div class="column">
          <h3>Add Employee</h3>
          <a href="#">Employee Add</a>
        </div>
      </div>
    </div>
  </div> 
</div>


<div style="padding:16px">

    <a href="csc323.php">CSC323</a>
</div>

</body>
</html>