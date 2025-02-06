<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #ff3300;
	  }
	  </style>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
</head>

<body>
<header id="header" class="header-scroll top-header headrom">
<nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-rounded" src="images/food-mania-logo.png" alt="Logo">
                </a>
                <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav" id="nav-links">
                        <li class="nav-item"> 
                            <a class="nav-link active" href="index.php" data-en="Home" data-kn="ಮುಖಪುಟ">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link active" href="restaurants.php" data-en="Restaurants" data-kn="ಉಪಾಹಾರಗೃಹಗಳು">Restaurants</a>
                        </li>
                        <?php
                            if(empty($_SESSION["user_id"])) { 
                                echo '
                                    <li class="nav-item">
                                        <a href="login.php" class="nav-link active" data-en="Login" data-kn="ಲಾಗಿನ್">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="registration.php" class="nav-link active" data-en="Signup" data-kn="ನೊಂದಣಿ">Signup</a>
                                    </li>';
                            } else {
                                echo '
                                    <li class="nav-item">
                                        <a href="your_orders.php" class="nav-link active" data-en="Your Orders" data-kn="ನಿಮ್ಮ ಆದೇಶಗಳು">Your Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logout.php" class="nav-link active" data-en="Logout" data-kn="ಲಾಗ್ ಔಟ್">Logout</a>
                                    </li>';
                            }
                        ?>
                        <li class="nav-item"> <button id="language-toggle" class="btn btn-primary">Switch to Kannada</button></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
<div style=" background-image: url('images/img/background_login.jpg');">

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>
  

<div class="pen-title">
  <
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2 data-kn="ನಿಮ್ಮ ಖಾತೆಗೆ ಲಾಗಿನ್ ಮಾಡಿ" data-en="Login to your account">Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="registration.php" style="color:#f30;" data-kn=" ಖಾತೆಯನ್ನು ರಚಿಸಿ" data-en="Create an account">Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
  <div class="container-fluid pt-3">
	<p></p>
  </div>


   
        <footer class="footer">
            <div class="container">

             
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5 data-kn="ಪಾವತಿ ಆಯ್ಕೆಗಳು" data-en="Payment Options">Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5 data-kn="ವಿಳಾಸ" data-en="Address">Address</h5>
                            <p  data-kn="123, 4ನೇ ಕ್ರಾಸ್, 7ನೇ ಮುಖ್ಯ, HSR ಲೇಔಟ್ ಸೆಕ್ಟರ್ 2, ಬೆಂಗಳೂರು, ಕರ್ನಾಟಕ, 560102" data-en="123, 4th Cross, 7th Main, HSR Layout Sector 2, Bengaluru, Karnataka, 560102">123, 4th Cross, 7th Main, HSR Layout Sector 2, Bengaluru, Karnataka, 560102</p>
                            <h5 data-kn="ದೂರವಾಣಿ: +91 8093424562" data-en="Phone: +91 8093424562">Phone: +91 8093424562</a></h5> </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                            <h5 data-kn="ಹೆಚ್ಚುವರಿ ಮಾಹಿತಿಗಳು" data-en="Addition informations">Addition informations>Addition informations</h5>
                           <p data-kn="ನಮ್ಮೊಂದಿಗೆ ಪಾಲುದಾರರಾಗುವುದರಿಂದ ಪ್ರಯೋಜನ ಪಡೆಯುವ ಸಾವಿರಾರು ಇತರ ರೆಸ್ಟೋರೆಂಟ್ ಗಳೊಂದಿಗೆ ಸೇರಿ"  data-en="Join thousands of other restaurants who benefit from having partnered with us">Join thousands of other restaurants who benefit from having partnered with us.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </footer>
        <script>
    // JavaScript to toggle between languages and persist selection
    const toggleButton = document.getElementById('language-toggle');
    
    // Retrieve the saved language from localStorage or default to 'en'
    let currentLanguage = localStorage.getItem('language') || 'en';

    // Function to update text content of elements with data-en and data-kn attributes
    function updateTextContent(element) {
        const translatableElements = element.querySelectorAll('[data-en], [data-kn]');
        translatableElements.forEach(el => {
            const text = el.getAttribute(`data-${currentLanguage}`);
            if (text !== null) {
                el.textContent = text;
            }
        });
    }

    // Update the toggle button text based on the current language
    function updateToggleButton() {
        toggleButton.textContent = currentLanguage === 'en' ? 'Switch to Kannada' : 'Switch to English';
    }

    // Event listener for toggle button
    toggleButton.addEventListener('click', () => {
        // Toggle between 'en' and 'kn'
        currentLanguage = currentLanguage === 'en' ? 'kn' : 'en';

        // Save the current language in localStorage
        localStorage.setItem('language', currentLanguage);

        // Update text content and toggle button text
        updateTextContent(document.body);
        updateToggleButton();
    });

    // Initialize the page with the saved language
    document.addEventListener('DOMContentLoaded', () => {
        updateTextContent(document.body);
        updateToggleButton();
    });
</script>


</body>

</html>
