<!DOCTYPE html>
<html>

<head>
  <title>Agora Web Sample</title>
  <link rel="stylesheet" href="vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/alert.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
  <link href="login.css" rel = "stylesheet" type = "text/css">
  <script src="AgoraRTCSDK-2.4.1.js"></script>
  <script src="vendor/jquery.js"></script>
</head>

<body>
  <h1>
    LOGIN 
  </h1>
  
  <form method = "post" action = "php/authentication.php">
    <div class="Pan">
      <div id="div_device" class="panel panel-default">
        <div class="select" style="margin-bottom: 10px;margin-top: 10px;padding: 5px;">
          <label>Username</label><br>
          <input type = 'text' name = 'username' id = 'username' placeholder="User Name">
        </div>
        <div class="select" style="margin-bottom: 10px;padding: 5px;">
          <label>Password</label><br>
          <input type='password' name = 'password' id = 'password' placeholder="Password">
        </div>
      </div>

      <div id="div_join" class="panel panel-default">
        <div class="panel-body">
          <div>
            <button id="join" class="btn btn-primary btnc" onclick="join()">LOGIN</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</body>
</html>