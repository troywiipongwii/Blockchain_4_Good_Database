<?php

include "connect_to_dp.php";
$keywordfromform1 = $_GET["keyword"];
$keywordfromform2 = $_GET["City, Country"];
$keywordfromform3 = $_GET["Supply chain"];
$keywordfromform4 = $_GET["The Digital Reserve"];

//Search the database by keyword

$sql = "SELECT Company, Location, Structure, Industry, Website FROM social_good_database WHERE Company LIKE '% ". $keywordfromform1 ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Company: " . $row["Location"]. " - Structure: " . $row["Structure"]. " " . $row["Industry"]. " " . $row["Website"]. "<br>";
    }
} else {
    echo "0 results";
}

// Seach the database by Location

$sql = "SELECT Company, Location, Structure, Industry, Website FROM social_good_database WHERE Location LIKE '% ". $keywordfromform2 ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Company: " . $row["Location"]. " - Structure: " . $row["Structure"]. " " . $row["Industry"]. " " . $row["Website"]. "<br>";
    }
} else {
    echo "0 results";
}

// Search the database by Industry

$sql = "SELECT Company, Location, Structure, Industry, Website FROM social_good_database WHERE Industry LIKE '% ". $keywordfromform3 ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Company: " . $row["Location"]. " - Structure: " . $row["Structure"]. " " . $row["Industry"]. " " . $row["Website"]. "<br>";
    }
} else {
    echo "0 results";
}

// Search the database by company name

$sql = "SELECT Company, Location, Structure, Industry, Website FROM social_good_database WHERE Company LIKE '% ". $keywordfromform4 ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Company: " . $row["Location"]. " - Structure: " . $row["Structure"]. " " . $row["Industry"]. " " . $row["Website"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
