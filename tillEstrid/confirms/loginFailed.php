<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="../assets/css/start.css" rel="stylesheet" type="text/css">
<script src = "../assets/js/loginValidation.js"></script>
</head>

<body>
<div id="mainwrapper">
  <header> 
    <div id="logo"><!-- <img src="logoImage.png" alt="sample logo"> --><!-- Company Logo text -->Logo</div>
    <nav> <a href="../register.php" title="Link">Sign up</a> <a href="../login.php" title="Link">Log in</a><a href="../loggedOut.php" title="Link">Log out</a> </nav>
  </header>
  <div id="content">
    <section id="mainContent"> 

      <h1>Login Here!</h1>
		<p> Fill in your email-address and your password to login.</p>
		<p> Login failed, try again!</p>
		<form name = "inputForm" action="../processes/loginProcess.php" onsubmit = "return validateForm()" method = "post">
			<br><label for="email">Email-address</label>
			<br><input type="text" id="email" name="email" placeholder="ex. lisa@gmail.com">
			<br><label for="fname">Password</label>
			<br><input type="text" id="password" name="password" placeholder="ex. xtlno">
			<br><input type="submit" value="Login!">
		</form><aside id="authorInfo"> 
     </aside>
    </section>
    <section id="sidebar"> 
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="../assets/img/trensstallen.jpg"/></div>
      <nav>
        <ul>
          <li><a href="../postTip.php" title="Link">Post a tip</a></li>
          <li><a href="../basilico.php" title="Link">Basilico</a></li>
          <li><a href="../frenchi.php" title="Link">Frenchi</a></li>
          <li><a href="#" title="Link">Iberico</a></li>
          <li><a href="#" title="Link">Aaltos</a></li>
          <li><a href="../start.php" title="Link">Home</a></li>
        </ul>
      </nav>
    </section>

  </div>
  <div id="footerbar">copyright @ Group 2. All rights reserved</div>
</div>
</body>
</html>
