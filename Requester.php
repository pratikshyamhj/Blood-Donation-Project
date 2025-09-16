<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>

<?php 
include('db_connection.php');
// Rest of your PHP code
?>
	<div class="container">
		<div class="box form-box">
			<header>Request</header>
			
            <form action="requester_connect.php" method="post" >

				<div class="field input">
                <label>Full Name</label>
                    <input type="text" id="fullname" name="name" placeholder="Enter your name here!" autocomplete="off" required>
				</div>
				<div class="field input">
					<label>Email</label>
                    <input type="email" id="email" name="u_email" placeholder="xyz123@gmail.com" autocomplete="off" required>
				</div>
				<div class="field input">
					<label>Age</label>
					<input type="number" name="age" id="age" placeholder="Enter age in number" autocomplete="off" required>
				</div>


				

				<div class="field input">
				<label>Contact Number</label>
                    <input type="tel" name="contact" id="contact" placeholder="your contact number here!" autocomplete="off"  required>
                </div>

                <div class="field input">
                    <label>Location</label>
                    <input type="text" name="d_location" id="location" placeholder="your location here!" autocomplete="off" required>
                 </div>
                    
     <div class="field input">
      <select style="padding: 10px; border-radius: 10px; border-color: maroon; " name="bloodType" id="bloodtype" required>
        <option value="" disabled selected>Select Blood Type</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="O-">O-</option>
        <option value="AB-">AB-</option>
         </select>
    </div>

    	<div class="field input">
                    <label>Hospital</label>
                    <input type="text" name="Hospital" id="location" placeholder="nearby Hospital!" autocomplete="off" required>
                 </div>
       

		<div class="field input">
		      <textarea style= "padding:20px; border-radius: 10px; border-color: maroon;" name="requestMessage" id="message"  placeholder="Your Message (Optional)"></textarea>
      			</div>

				<div class="field">
					
					<input type="submit" class="btn" name="submit" value="Submit" required>
				</div>

				
			</form>
		</div>
	</div>

</body>
</html>