<?php
	$uname = "dbtrain_1036";
	$pass = "xotlno";
	$host = "dbtrain.im.uu.se";
	$dbname = "dbtrain_1036";
	
	$connection =  new mysqli($host, $uname, $pass, $dbname);
	
	if($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}
	include('processes/session.php');
	$activeEmail = $_SESSION['login_user'];
	$queryUser = "SELECT userid FROM Webusers WHERE email = '$activeEmail'";
	$resultUserID = mysqli_query($connection, $queryUser);
	$rowUserID = $resultUserID->fetch_assoc();
	$userID = $rowUserID['userid'];
	
	$queryAdmin = "SELECT adminid FROM Admin WHERE userid = '$userID'";
	$resultAdmin = $connection -> query($queryAdmin);
	$count = $resultAdmin-> num_rows;
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>frenchi</title>
		<link href="assets/css/start.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="mainwrapper">
 
			<header> 
				<div id="logo">Logo</div>
				<nav> <a href="register.php" title="Link">Sign up</a> <a href="login.php" title="Link">Log in</a><a href="loggedOut.php" title="Link">Log out</a> </nav>
			</header>
  
  
  <div id="content">    
	<section id="mainContent"> 

		<h1>Frenchi</h1>
		<h3>Restaurant, Bar & Café</h3>
		<div id="bannerImage"><img src="assets/img/frenchi.jpg" alt="picture of the restaurant"/></div>
		<p> Frenchi is a restaurant that serves food inspired by the French and Asian kitchen. The restaurant is open from lunch to the late evening. 
		You can enjoy a nice fika or a have a glass of wine on the outside dining area that's open during spring and summer. 
		Otherwise the dining area is large with seating for a party over 40 persons. The restaurant is located in the centre of Uppsala.</p>

		<p> Visit the home page for the restaurant on this link here, <a href="https://frenchi.se/">Frenchi.</a> </p>
	 
	 <aside id="commentsSection"> 
        
        <h1>Tips</h1>
 					<?php
				$uname = "dbtrain_1036";
				$pass = "xotlno";
				$host = "dbtrain.im.uu.se";
				$dbname = "dbtrain_1036";
	
				$connection =  new mysqli($host, $uname, $pass, $dbname);
	
				if($connection -> connect_error)
				{
					die("Connection failed: ".$connection.connect_error);
				}
				
				$activeRestaurant = "Frenchi";
				$sql = "SELECT tipid, title, content, userid FROM Tips, Restaurants WHERE Tips.restaurantid = Restaurants.id AND Restaurants.name = '$activeRestaurant'";
				$result = $connection->query($sql);
		 		$user = $_SESSION['login_user'];

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) { 
						print("<p><h3>TipID: ". $row["tipid"]."<br>Tip: ". $row["title"]. "</h3><h4>Posted by: ".$user."</h4>  <h2> ".$row["content"]. "</h2><br> </p>");
					}
					if($count > 0){
						print("<form name = inputForm action=processes/deleteTip.php onsubmit = return validateForm() method = post>
						<br><input type=text id=delete name=delete placeholder= TipID.. > 
						<br><input type=submit value = Delete>");
					}
				}
				$connection->close();
			?>
	</aside>
    </section>
    <section id="sidebar"> 
  
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="assets/img/trensstallen.jpg" alt=""/></div>
      <nav>
        <ul>
		<li><a href="start.php" title="Link">Home</a></li>
		<li><a href="searchTip.php" title="Link">Search for Tips</a></li>
          <li><a href="postTip.php" title="Link">Post a tip</a></li>
          <li><a href="basilico.php" title="Link">Basilico</a></li>
          <li><a href="frenchi.php" title="Link">Frenchi</a></li>
          <li><a href="#" title="Link">Iberico</a></li>
          <li><a href="#" title="Link">Aaltos</a></li>
          <li><a href="#" title="Link">Contact us</a></li>
        </ul>
      </nav>
    </section>
  </div>
  <div id="footerbar"> copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>
