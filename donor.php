<!--doner.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donate</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<?php
include('db_connection.php');
?>
	<div class="container">
		<div class="box form-box">
			<header>Donate:)</header>
			<form action="doner_connect.php" method="post" onsubmit="return validateForm()">

				<div class="field input">
					<label>Username</label>
					<input type="text" name="username" id="username" placeholder="Enter your name here!" autocomplete="off" required>
				</div>
				<div class="field input">
					<label>Email</label>
                    <input type="email" name="u_email" placeholder="xyz123@gmail.com" autocomplete="off" required>
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
                    <input type="text" name="location" id="location" placeholder="your location here!" autocomplete="off" value="ktm" required>
                 </div>
                    
     <div class="field input">
      <select name="blood_type" id="bloodType" style="padding: 10px; border-radius: 10px; border-color: maroon; " >
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
          <label>Last donated blood</label>
                    <input type="date" name="datee" id="lastdonate" max="<?php echo date('Y-m-d'); ?>" placeholder="last donated date here!" required>
        </div>

		<div class="field input">
		      <textarea style="padding:20px; border-radius: 10px; border-color: maroon;" name="donationMessage" id="donate_message" placeholder="Your Message (Optional)"></textarea>
      			</div>

				<div class="field">
					
					<input type="submit" class="btn" name="submit" value="Submit" onsubmit="submit()" id="getNotifiedButton" required>
<br>
					
				</div>

				
			</form>
		</div>
	</div>
   <script >
   	function validateForm(){
   		var ageInput=document.getElementById("age").value;
   		var lastDonationDate = document.getElementById("lastdonate").value;
	    var currentDate = new Date();
	    var sixMonthsAgo = new Date();
	    sixMonthsAgo.setMonth(currentDate.getMonth() - 6);

   		//Check if the age is less than 20
   		if(parseInt(ageInput)<20){
   			alert("You are not eligible to donate bloodb as donors must be 20 years or older.");
   			return false; //prevent form submission
   		}
   		if (new Date(lastDonationDate) > sixMonthsAgo) {
      alert("You are not eligible to donate blood as your last donation is less than 6 months.");
      return false; // Prevent form submission
    }
   		return true;// allow for submission
   	}
   </script>
</body>
</html>