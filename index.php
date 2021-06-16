
<?php include ('function.php');
include ('flower.php');
include ('config.php');
 ?>
<!DOCTYPE html>
<html lang="en-US">
<head>

    <title>Keshu's Flower Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
    <meta http-equiv="refresh" content="360">

    <link rel="stylesheet" type="text/css" href="css/slidePic.css" />
    <link rel="stylesheet" type="text/css" href="css/flower.css" />

</head>

<body>

    <div class="main_wrapper">
        <!-- headerlogo -->
        <div id='logo'>
            <img src="pic/logo.png" alt="calla" width='250' height='150' />
		</div>
			
        <!-- header -->

        <div>
            <h2>Keshu's Flower Shop</h2>
        </div>

        <span id="phoneHeader">
			<img src="pic/tel.jpg" alt="phoneHeader" width='30' height='30' />
			<span id="phone">For Orders, Call us: <b>+91 - 9533064486<b>
            </span>

		</span>

        <!-- main menue -->
        <div id="nav">
            <ul id="tabs">
                <li><a href="index.php">Home</a></li>

                <li><a href="#">About us</a></li>

                <li><a href="#">Contact</a></li>

                
                <li><a href="flowerLogin.php">Login</a></li>

                <li>
                    <form method="get" action="result.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" />
                        <input type="submit" name="search" value="search" />
                    </form>
                 </li>
                        
            </ul>
        </div>

        <!-- make a side bar -->
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>

            <ul id="cats">
                <?php getcat(); ?>
            </ul>
            <div id="sidebar_title1">Price</div>
            <ul id="cats">
                <?php getprice(); ?>
            </ul>
        </div>
        
        <!-- Jquery for Slide show on the middle -->
        <div id='content_wrapper'>
            <div class="slider">
                <ul class="slides">

                    <li class="Slide"><img src="pic/flower1.jpg" alt="pic1" /></li>
                    <li class="Slide "><img src="pic/flower2.jpg" alt="pic2" /></li>
                    <li class="Slide "><img src="pic/flower3.jpg" alt="pic3" /></li>
                    <li class="Slide "><img src="pic/flower4.jpg" alt="pic4" /></li>
                    <li class="Slide "><img src="pic/flower5.jpg" alt="pic5" /></li>
                    <li class="Slide "><img src="pic/flower6.jpg" alt="pic6" /></li>
                    <li class="Slide"><img src="pic/flower7.jpg" alt="pic7" /></li>

                </ul>
            </div>

            <!-- Function for Jquery Slide -->
            <script src="js/jquery.js"></script>
            <script>
                $(function() {
                    //configuration
                    var width = 950;
                    var animation = 1000;
                    var pause = 4000;
                    var currentSlide = 1;

                    //cache DOM
                    var $slider = $('.slider');
                    var $slideContainer = $slider.find('.slides');
                    var $Slide = $slideContainer.find('.Slide');

                    //copy slide1 to last
                    $slideContainer.append($Slide.first().clone());
                    var interval;

                    function startSlide() {
                        interval = setInterval(function() {

                            $('.slider .slides').animate({
                                    'margin-left': '-=' + width
                                }, animation,

                                function() {
                                    ++currentSlide;
                                    if (currentSlide === $Slide.length + 1) {
                                        currentSlide = 1;
                                        $slideContainer.css('margin-left', 0);
                                    }
                                });
                        }, pause);
                    }

                    function stopSlide() {
                        clearInterval(interval);
                    }
                    $slideContainer
                        .on('mouseenter', stopSlide)
                        .on('mouseleave', startSlide);
                    startSlide();
                });
            </script>

            <div id='product_box'>

                <?php getpro();?>
                <?php getpro_cat();?>
                <?php getprice_Cat();?>

            </div>

                               

        </div>

        <!-- make a Footer -->
        <div id='footer'>
            Copyright© All rights reserved.
        </div>

    </div>
</body>

</html>
           
