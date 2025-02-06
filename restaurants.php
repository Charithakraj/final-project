<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Restaurants</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

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
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#" data-kn="ರೆಸ್ಟೋರೆಂಟ್ ಆಯ್ಕೆಮಾಡಿ" data-en="Choose Restaurant"
                        >Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#" data-kn="ನಿಮ್ಮ ನೆಚ್ಚಿನ ಆಹಾರವನ್ನು ಆರಿಸಿ" data-en="Pick Your favorite food"
                        >Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#"  data-kn="ಆರ್ಡರ್ ಮಾಡಿ ಮತ್ತು ಪಾವತಿಸಿ" data-en="Order and Pay">Order and Pay>Order and Pay</a></li>
                    </ul>
                </div>
            </div>
            <div class="inner-page-hero bg-image" data-image-src="images/img/res.jpeg">
                <div class="container"> </div>
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">     
                    </div>
                </div>
            </div>
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from restaurant");
									      while($rows=mysqli_fetch_array($ress))
										  {
													
						
													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Food logo"></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																		
																		<a href="dishes.php?res_id='.$rows['rs_id'].'" class="btn theme-btn-dash">View Menu</a> </div>
																</div>
																<!-- end:right info -->
															</div>';
										  }
						
						
						?>
                                    
                                </div>
                
                            </div>
                         
                            
                                
                            </div>
                          
                          
                           
                        </div>
                    </div>
                </div>
            </section>
       
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
                                    <p data-kn="123, 4ನೇ ಕ್ರಾಸ್, 7ನೇ ಮುಖ್ಯ, HSR ಲೇಔಟ್ ಸೆಕ್ಟರ್ 2, ಬೆಂಗಳೂರು, ಕರ್ನಾಟಕ, 560102" data-en="123, 4th Cross, 7th Main, HSR Layout Sector 2, Bengaluru, Karnataka, 560102">123, 4th Cross, 7th Main, HSR Layout Sector 2, Bengaluru, Karnataka, 560102</p>
                                    <h5 data-kn="ದೂರವಾಣಿ: +91 8093424562" data-en="Phone: +91 8093424562">Phone: +91 8093424562</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5 data-kn="ಹೆಚ್ಚುವರಿ ಮಾಹಿತಿಗಳು" data-en="Addition informations">Addition informations >Addition informations</h5>
                                   <p data-kn="ನಮ್ಮೊಂದಿಗೆ ಪಾಲುದಾರರಾಗುವುದರಿಂದ ಪ್ರಯೋಜನ ಪಡೆಯುವ ಸಾವಿರಾರು ಇತರ ರೆಸ್ಟೋರೆಂಟ್ ಗಳೊಂದಿಗೆ ಸೇರಿ"  data-en="Join thousands of other restaurants who benefit from having partnered with us">Join thousands of other restaurants who benefit from having partnered with us.</p>
                                </div>
                    </div>
                </div>
       
            </div>
        </footer>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
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