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
	$output='';
	if(isset($_POST['search'])){
		$searched = mysqli_real_escape_string($connection, $_POST["search"]);
		$query = "SELECT title, content FROM Tips WHERE title LIKE '%$searched%' OR content LIKE '%$searched%'";
		$count = mysql_num_rows($query);
		if($count == 0){
			$output = "There were no matching tips to your search";
		}
		else{
			while($row = mysql_fetch_array($query)){
				$title = $row['title'];
				$content = $row['content'];
				$output .= '<div> '.$title.' '.$content.'</div>';
			}
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search for Tips</title>
<link href="assets/css/start.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
  <header> 
    <div id="logo"><!-- <img src="logoImage.png" alt="sample logo"> --><!-- Company Logo text -->Logo</div>
    <nav> <a href="register.php" title="Link">Sign up</a> <a href="login.php" title="Link">Log in</a><a href="loggedOut.php" title="Link">Log out</a> </nav>
  </header>
  <div id="content">
    <section id="mainContent"> 

      <h1>Search for tips here</h1>
		<p> Just fill in a search word and choose what restarurant the tip should concern.</p>
		<form name = "inputForm" action="searchTip.php" onsubmit = "return validateForm()" method = "post">
			<br><input type="text" id="search" name="search" placeholder="Search for tips here..">
			<br><select name="restaurant">
				<option value="Basilico">Basilico</option>
				<option value="Frenchi">Frenchi</option>
				<option value="Iberico">Iberico</option>
				<option value="Aaltos">Aaltos</option>
			</select>
			<br><input type="submit" value="Search">
		</form><aside id="authorInfo"> 
		<?php print ("$output");?>
     </aside>
    </section>
    <section id="sidebar"> 
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="assets/img/trensstallen.jpg"/></div>
      <nav>
        <ul>
          <li><a href="postTip.php" title="Link">Post a tip</a></li>
          <li><a href="basilico.php" title="Link">Basilico</a></li>
          <li><a href="frenchi.php" title="Link">Frenchi</a></li>
          <li><a href="#" title="Link">Iberico</a></li>
          <li><a href="#" title="Link">Aaltos</a></li>
          <li><a href="start.php" title="Link">Home</a></li>
        </ul>
      </nav>
    </section>

  </div>
  <div id="footerbar">copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>