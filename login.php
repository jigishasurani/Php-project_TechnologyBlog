<?php  
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="routers/router.php" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login for add post</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
			<label for="username" class="center-align">Username</label><br>
            <input name="username" id="username" type="text">
            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
		  <label for="password" class="center-align">Password</label><br>
            <input name="password" id="password" type="password">
          </div>
        </div>
        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>

  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins.min.js"></script>

    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
<?php

?>
