<html>
<head>
  <!-- Latest compiled and minified CSS (Bootstrap)-->
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <!-- Optional theme (Bootstrap)-->
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <!--Font-->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <!--CSS-->
  <!--<link rel="stylesheet" type = "text/css" href = "CSS/style.css">-->
</head>

<body>
  <div class = "header">
    <h1>Login</h1>
  </div>
  <div class = "main">
    <form class = "form-horizontal" method = "post">
        <div class="form-group">
          <label class = "control-label col-sm-2" for="username">Username:</label>
          <div class = "col-sm-8">
            <input type="text" class="form-control" id = "username">
          </div>
        </div>
        <div class="form-group">
          <label class = "control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id = "pwd">
          </div>
        </div>
        <div class="form-group">
          <input type = "submit" name = "submit">
        </div>
      </form>
      <!--<div class="buttons">
        <button type = "button" class="btn-default" id="loginButton">Login</button>
        <button type = "button" class="btn-default" id="registerButton" style="margin-left: 50px">Register</button>
      </div>-->
    </div>
  </body>
</html>
