<!DOCTYPE html>
<html>
<head>
  <title>Ask a STEM Sister</title>
  <link rel="stylesheet" type="text/css" href="BOOTY.css" >
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
header, footer{
  padding: 1em;
    color: white;
    font-size: 50px;
    background-image: url("http://www.baltana.com/files/wallpapers-8/Geometric-Shape-Design-HD-Desktop-Wallpaper-24824.jpg");
    clear: left;
    text-align: center;
}
h1
{
  font-weight: lighter;
  font-family: Avenir;
}
h2{
  font-family: Avenir;
  font-weight: lighter;
  font-size: 25px;
}
p{
  font-family: Avenir;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}
.grid-container>div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding:20px 0;
  font-size: 15px;
}
.item1 {
  grid-area: 1 / 1 / span 1 / span 1;
}
.item2 {
  grid-area: 1 / 2 / span 1/ span 1;
}
.item3 {
  grid-area: 1 / 2/ span 2/ span 1;
}
  nav {
    box-sizing: border-box;
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}
  nav ul {
    list-style-type: none;
    padding: 0;
}
  nav ul a {
    text-decoration: none;
}
  localnews {
    box-sizing: border-box;
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden
  }
   globalnews {
    box-sizing: border-box;
    margin-left: 170px;
    border-left: 1px solid gray;
    border: 1px solid red;
    padding: 35px 70px 50px;
  }
  explorepage1 {
    box-sizing: border-box;
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden
  }
  explorepage2 {
    box-sizing: border-box;
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden
  }
</style>
</head>
<body>

  <div class="topnav">
    <a class="active" href="#home">HOME</a>

    <div class="dropdown">
      <button class="dropbtn">UNIVERSITIES
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <a href="#companies">COMPANIES</a>
    <div class="dropdown">
      <button class="dropbtn">EVENTS
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <a href="#resources">RESOURCES</a>
    <div class="dropdown">
      <button class="dropbtn">ABOUT US
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>

  </div>

<header>
  <h1>ASK A STEM SISTER</h1>
<p><a href="#"></a></p>
</header>

<nav>
  <h2>Universities</h2>
  <ul>
    <li><a href="#">University of Iowa</a></li>
    <li><a href="#">University of Illinois Champaign Urbana</a></li><li>
    <li><a href="#">University of Wisconsin Madison</a></li>
    <li><a href="#">University of California Berkley</a></li>
    <li><a href="#">Iowa State University</a></li>
    <li><a href="#">Illinois State University</a></li>
    <li><a href="#">Ohio State University</a></li>
    <li><a href="#">University of Michigan</a></li>
    <li><a href="#">Temple University</a></li>
    <li><a href="#">Miami University</a></li>
    <li><a href="#">University of Illinois Chicago</a></li>
  </ul>
</nav>

<div class="grid-container">
  <div class="item1">
    <h2 class="localnews">Local News: Iowa State University</h2>
    <h4 class="localnews">Graduate Programs
      <li><a href="mockcompany.html">Chemical Engineering Graduate Programs</a></li>
      <li><a href="mockcompany.html">Scholarships</a></li>
    </h4>
    <h4 class="localnews">Research Programs
      <li><a href="mockcompany.html">New Pharmaceutical Drug, lab assistant needed</a></li>
    </h4>
    <h4 class="localnews">Trending Forums</h4>
    <h4>
      <li><a href="#">WISE Digital Women</a></li>
      <li><a href="#">Mechanical Engineering Women</a></li>
      <li><a href="#">Study Budy Finder</a></li>
    </h4>
    <h2 class="globalnews">Global News</h2>
    <h4>
      <li><a href="#">Study abroad!</a></li>
      <li><a href="#">Scholarship opprotunities for STEM women</a></li>
    </h4>

    <h2> Reviews </h2>
    <?php
  include("config.php");

  $sql = "SELECT * FROM Review";

  $result = $conn->query($sql) or die(mysql_error());

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        echo '<h3>';
        echo $row["Name"];
        echo '</h3>';
        echo '<h4>';
        echo $row["University"] . " - " . $row["Department"];
        echo '</h4>';
        echo '<h5>';
        echo "Dates attended: " . $row["DateStart"] . " - " . $row["DateEnd"];
        echo '</h5>';
          echo "Rating: " . $row["Rating"]. "<br>";
      }
  } else {
      echo "0 results";
  }

  ?>

  </div>

<div class="grid container">
  <div class="item3">
    <h2 class="explorepage2">Explore by location</h2>
    <h4>
      <li><a href="#">Update university</a></li>
      <li><a href="#">Add a university to your profile</a></li>
      <li><a href="#">Browse other locations</a></li>
    </h4>
    <h2 class="explorepage1">Explore by field of interest</h2>
    <h4>
      <li><a href="#">Science</a></li>
      <li><a href="#">Technology</a></li>
      <li><a href="#">Engineering</a></li>
      <li><a href="#">Math</a></li>
    </h4>
  </div>

  <div class="grid-container">

  </div>
  <p>Don't see the school you're looking for listed?
    <li><a href="#">Request to add a school</a></li>
  </p>

</body>
</html>
