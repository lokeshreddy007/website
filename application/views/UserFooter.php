<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
         <!-- footer begin -->
  <footer style="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">  
                         <!--  
                          <img src="images/logo.png" class="logo-small" alt=""><br>
                         -->
                           
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="<?php echo base_url();?>ProjectControl/aboutus">About Us</a></li>
                             

                                        <li><a href="<?php echo base_url();?>ProjectControl/ongoingproject">On Going Projects</a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/finishedproject">Finished Projects</a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/upcomingproject">Up Coming Projects</a></li>
                                        
                                   
                                <li><a href="<?php echo base_url();?>ProjectControl/contactus">Contact Us</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>Good To Know</h3>
                            <ul>
                                <li><a href="<?php echo base_url();?>UserControl/termsandconditions">Terms and Conditions</a></li>
                                
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">Design </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">Production </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">Carpentry </a></li>
                                        <li><a href="<?php echo base_url();?>ProjectControl/contactus">General Design </a></li>
                                       
                         
                        </div>


                        
                        <div class="col-md-4">
                            <h3>Contact Us</h3>
                            <div class="widget widget-address">
                                <address>
                                
                               
</div>

                                 
                                    
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                


        <!-- footer close -->
    </div>
	<div class="subfooter">
                    <div class="container">
                        <div class="row">
                            
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
        <!-- style switcher -->
         <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jpreLoader.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>js/easing.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.scrollto.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>js/classie.js"></script>
    <script src="<?php echo base_url(); ?>js/video.resize.js"></script>
    <script src="<?php echo base_url(); ?>js/validation.js"></script>
    <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>js/enquire.min.js"></script>
    <script src="<?php echo base_url(); ?>js/designesia.js"></script>
    <script src="<?php echo base_url(); ?>demo/demo.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="<?php echo base_url(); ?>js/typed.js"></script>

    <script>
        $(function () {
            // jquery typed plugin
            $(".typed").typed({
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 1500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function () { null; },
                resetCallback: function () { newTyped(); }
            });
        });
    </script>
	 
    </body>
</html>
