
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Blood Donation </title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <style>

        @media screen and (max-width: 980px) {
            h1 {
                font-size: 5vmin;
            }
            .nevigation ul li {
                padding: 10px;
            }
        }

        @media screen and (max-width: 638px) {
            .divflex{
                display: flex;
                flex-direction: column;
                gap: 25px;
                padding: 10px 0;
            }

            .nevigation{
                height: 100%;
            }

            .nevigation ul{
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .body{
                position: relative;
                height: 100%;
                width: 100%
            }

            .text{
                position: absolute;
                font-size: 20px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            #donateBtn{
                font-size: 11px;
                display: block;
            }
        }

        @media screen and (max-width: 508px) {
            h1 {
                font-size: 10px;
            }

            .text{
                text-align: center;
                display: flex;
                flex-direction: column;
                position: absolute;
                font-size: 10px;
                gap: 0;
            }

            .body{
                display: grid;
                place-content: center;
                position: relative;
            }

            #btnForm{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .text {
                width: 100%;
                text-align: center;
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 10;
                left: 10;
            }
            #donateBtn {
                font-size: 11px;
                padding: 8px 16px;
                position: absolute;
                float: left;
                height: 10px;
            }

            .text #donateBtn{
                height: 30px;
                width: 50px;
                font-size: 10px;
                text-align: center;
                border: 1px solid white;
            }

            .scroll-to-top-btn{
                font-size: 10px;
            }
            
        }
        @media (max-width: 500px) {
            .center-align-footer {
                padding: 10px;
            }

            #contactSection p {
                font-size: 14px;
                margin: 3px 0;
            }
        }
        @media (max-width: 500px) {
            .about-section, .services-section {
                margin: 10px;
                padding: 10px;
            }

            .about-section h2, .services-section h1 {
                font-size: 24px;
            }

            .about-section p, .services-section p {
                font-size: 16px;
            }

            .divflex {
                flex-direction: column;
                align-items: center;
            }

            .services-section div {
                flex: 1 1 100%;
                margin: 10px 0;
            }
        }


    </style>

</head>
<body>
    <header>
            <h1 class="glow" style="padding: 40px; height: 50px; text-align: center; background-color: maroon;  ">Welcome to Blood Donation System</h1>
                
            
            
            <nav class="nevigation">
                    <ul>
                        <li><a href="#"> Home </a></li>
                        <li><a href="#contactSection"> Contact us </a></li>
                        <li><a href="#aboutSection" onclick="toggleAboutSection()">About Us</a></li>
                        <li><a href="#servicesSection"> Service </a></li>  
         
                    </ul>
                </nav>
    
    </header>
        <div class="body">
            <video autoplay muted loop id="background-video" width="100%">
                <source src="video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <div class="text">
                <h1>Donate Blood, Save Lives</h1>
                <p>Join us in our mission to help those in need of blood donations.</p>

                <form action="loginForm.php" id="btnForm">
                        <button id="donateBtn" onclick="showForm()" >Login</button>
            </form>
            </div>   
            
        </div>
        <div id="aboutSection" class="about-section"  style="display: none;">
            <h2>About Us</h2>
                <p>We are the Blood Bank System, dedicated to saving lives through blood donation. Our mission is to provide a safe and reliable platform for voluntary blood donations.</p>
                <p>Founded in 20XX, our organization has been at the forefront of ensuring a steady supply of blood for those in need. We collaborate with donors, healthcare professionals, and volunteers to make a positive impact on our community.</p>
                <p>Our commitment to safety, quality, and transparency ensures that every blood donation is handled with the utmost care. Together, we can make a difference and help save lives.</p>
        </div>
        <div id="servicesSection" class="services-section">
            <h1 style="background-color: lightgoldenrodyellow;">Our Services</h1>
            <div class="divflex">
                <div>
                    <h3>Blood Donation</h3>
                        <div>
                            <img src="pictures/donation.png" height="150px" width="180px">
                            <p>
                            Voluntary act of giving blood to save lives,<br>Donated blood is tested and stored safely,<br>Anyone can participate and make a difference.
                            </p>
                        </div>
                </div>
                <div>
                    <h3>Blood Storage</h3>
                        <div>
                            <img src="pictures/storage.png" height="150px" width="180px">
                            <p>Blood Collection from donors,<br>Blood Testing for safety,<br>Safety and Quality Assurance.</p>
                        </div>
                </div>
                <div>
                    <h3>Blood Testing</h3>
                        <div>
                            <img src="pictures/testing.png" height="150px" width="180px">
                            <p>Infection Screening (HIV, hepatitis, syphilis),<br>Blood Typing (A, B, AB, O, Rh factor).</p>
           
                        </div>
                </div>
            </div>

        
    <script>
        // JavaScript for the toggle effect
        function toggleAboutSection() {
            var aboutSection = document.getElementById("aboutSection");
                if (aboutSection.style.display === "none" || aboutSection.style.display === "") {
                    aboutSection.style.display = "block";
                } else {
                    aboutSection.style.display = "none";
                    }
        }               

// JavaScript for the "Back to Top" button
            const backToTopButton = document.getElementById("back-to-top-button");

    // Function to scroll to the top of the page
                function scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth" // Smooth scrolling animation
                    });
                }
                    backToTopButton.addEventListener("click", scrollToTop);// Attach a click event handler to the button
    </script>

<footer id="contactSection" class="center-align-footer">
    <p>Contact Us:</p>
    <p>Address: Sanepa Street, Lalitpur, Nepal</p>
    <p>Email: blooddonation123@gmail.com</p>
    <p>Phone: 01-5512123</p>
    <p>Follow us on <a href="www.facebook.com">Facebook</a> and <a href="www.twitter.com">Twitter</a></p>
    <p>&copy; 2023 Blood Bank System. All rights reserved.</p>



 <!-- Arrow button to scroll to the top (home page) -->
  <a href="#" class="scroll-to-top-btn">&#8593; Back to Top</a>

</footer>
</body>
</html>

        
   