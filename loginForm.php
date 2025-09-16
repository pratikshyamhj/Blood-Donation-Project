<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood</title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
  <div class="container">
    <div class="box form-box">
      <header>Login</header>
      <form action="" method="post">

    <div class="field input">
      <select id="dropdown"
              name="role" 
              aria-label="Default select example"> 
        <option value="admin">Admin</option>
        <option value="doner">Donors</option>
    <option value="user">Requester</option>
       
      </select><br></br>
    </div>
    <div class="imgcontainer">
    <img src="pictures/img_avatar2.png" alt="Avatar" class="avatar" style="margin-left: 5px; margin-top: -40px;">
  </div>

        

        <div class="links">
          <h3 style="margin-left:75px">Click down to fill the form!!</h3> 
          
                <a id="admin" href="admin.php" style="margin-left:150px" >admin login</a>
                <a id="doner" href="donor.php" style="margin-left:150px">Donate</a>
                <a id="user" href="Requester.php" style="margin-left:150px">Request</a>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>