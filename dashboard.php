<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Dashboard</title>
   <style>
       *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
       }
       body{
        min-height: 100vh;
       }
       a{
        text-decoration: none;
       }
       li{
        list-style: none;
       }
       h2{
        color: #4444;
       }
       .content{
        position: fixed;
        background: #f05462;
        width: 20vw;
        display: flex;
        flex-direction: column;
        margin-top: 90px;
       }
       .content .Navigationn{
        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center;
       }
       .content li{
        font-size: 24px;
        padding: 10px 40px;
        color: white;
        display: flex;
        align-items: center;
       }
       .content li:hover{
        background: white;
        color: #f05462;
       }


   </style>
</head>
<body>
  <header>
        <h1>Welcome to Blood Donation System</h1>
    </header>
   <?php include 'nav.php'; ?>
        <div class="content">
            <div class="Navigationn">
            <h2>Navigation</h2>
        </div>
            <ul>
                <li><a href="Menu.php">Dashboard</a></li>
                <li><a href="#">Donor</a></li>
                <li><a href="#">Recepient</a></li>
                
            </ul>
        </div>

       
     <?php include 'footer.php'; ?>

   
</body>
</html>
