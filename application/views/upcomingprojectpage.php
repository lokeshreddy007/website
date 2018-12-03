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
         <div id="wrapper">
	
	<!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Up Coming Projects</h1>
                        <ul class="crumb">
                            <li><a href="<?php echo base_url();?>Welcome/index">Home</a></li>
                            <li class="sep">/</li>
                            <li>Up Coming Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                <div class="container">

                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                <li><a href="#" data-filter=".living-room">Living Room</a></li>
                                <li><a href="#" data-filter=".dining-room">Dining Room</a></li>
                                <li><a href="#" data-filter=".bed-room">Bed Room</a></li>
                                <li><a href="#" data-filter=".kitchen-room">Kitchen Room</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- portfolio filter close -->

                </div>

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols wow fadeInUp" data-wow-delay=".3s">

    <?php foreach($projList as $projItem){ ?>
                  

                    <!-- gallery item -->
                    <div class="item <?php echo $projItem->ITEMTYPE;?>">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="project-details-1">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $projItem->IMGTITLE;?></span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php echo base_url().$projItem->IMGPATH; ?>" alt="<%=newString%>" />
                        </div>
                    </div>
                    <!-- close gallery item -->
                    
                    <?php 
			}
		
  ?>


                </div>
               
            </section>

                   <!--  gallery item
                   <div class="item hospitaly">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-2">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Modern Elegance Suite</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(2).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item hospitaly">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Apartment Renovation</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(3).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item residential">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Youtube Video</span>
                                   </span>
                               </span>
                           </a>
                           <img src="images/portfolio/pf%20(4).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item office">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Vimeo Video</span>
                                   </span>
                               </span>
                           </a>
                           <img src="images/portfolio/pf%20(5).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item commercial">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Restaurant In Texas</span>
                                   </span>
                               </span>
                           </a>
                           <img src="images/portfolio/pf%20(6).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item residential">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Summer House</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(7).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item office">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Office On Space</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(8).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item office">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Luxury Living Room</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(9).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item residential">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Cozy Bedroom</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(10).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item hospitaly">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Classic Furnishing</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(11).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item
                   
                   gallery item
                   <div class="item commercial">
                       <div class="picframe">
                           <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                               <span class="overlay">
                                   <span class="pf_text">
                                       <span class="project-name">Restaurant In Cannes</span>
                                   </span>
                               </span>
                           </a>
                   
                           <img src="images/portfolio/pf%20(12).jpg" alt="" />
                       </div>
                   </div>
                   close gallery item -->

                </div>
               
            </section>
        </div>
    </body>
</html>
