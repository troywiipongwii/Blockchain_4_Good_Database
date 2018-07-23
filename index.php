<html>


<head>

</head>

<body>
<h1> Blockchain For Social Good <h1/>

<?php

include "connect_to_dp.php";

//include "search_for_all.php";

?>

<h2> Please Choose One of the Following Search Parameters <h2/>

<form action="/search_keyword.php">
  Please enter a keyword :<br>
  <input type="text" name="keyword"><br>
</form>

<form action="/search_keyword.php">
  Please enter a location :<br>
  <input type="text" name="City, Country"><br>
</form>

<form action="/search_keyword.php">
  Please enter an Industry :<br>
  <input type="text" name="Supply chain"><br>
</form>

<form action="/search_keyword.php">
  Please enter a Company name :<br>
  <input type="text" name="The Digital Reserve"><br>
</form>

<?php

//include "search_keyword.php";








$mysqli->close();

?>


</body>

</html>
		
