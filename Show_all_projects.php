<?php

//if any values in table display one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";  //<br> for line break

$sql = "SELECT Company, Location, Structure, Industry, Website FROM social_good_database";
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
