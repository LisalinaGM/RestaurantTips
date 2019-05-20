<?php
session_start();
if(session_destroy())
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Now logged out</title>
<link href="assets/css/start.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
  <header> 
    <div id="logo">RestaurantTips</div>
    <nav> <a href="register.php" title="Link">Sign up</a> <a href="login.php" title="Link">Log in</a><a href="loggedOut" title="Link">Log out</a> </nav>
  </header>
  <div id="content">
    <section id="mainContent"> 
	  <h2 style= "text-align: center">You are now logged out!</h2>
	  <p style="text-align: center">Welcome back another time!</p>
		<aside id="authorInfo"> 
	  </aside>
    </section>
    <section id="sidebar"> 
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="assets/img/litenbannan.png" alt=""/></div>
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
  </div>
  <div id="footerbar">copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>
