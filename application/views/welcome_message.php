<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>


 
</head>

<body id="homepage">

    
  
<div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">

                <div id="revolution-slider">
                    <ul>
                <?php foreach($sliderlist as $item){?>
                   
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                          
                            <img src="<?php echo base_url().$item->IMGPATH; ?>" alt="" />
                            <div class="tp-caption big-white sft"
                                data-x="0"
                                data-y="160"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="450">
                              <?php echo $item->IMGDESC; ?>
                            </div>

                        

                            <div class="tp-caption ultra-big-white customin customout start"
                               data-x="0"
                               data-y="center"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="800"
                               data-start="400"
                               data-easing="easeInOutExpo"
                               data-endspeed="400">
                             <?php echo $item->IMGTITLE; ?>
                           </div>
                           
                           <div class="tp-caption sfb"
                               data-x="0"
                               data-y="335"
                               data-speed="400"
                               data-start="800"
                               data-easing="easeInOutExpo">
                               <a href="#" class="btn-slider">Our Portfolio
                               </a>
                           </div>
                        
                      </li>    
                    <?php }?>                                  
                    </ul>
                </div>
            </section>


            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-about">
                <div class="container">
                    <div class="row">
                     <h1>What We Do</h1>
                              <h2>We cater to specific customer needs using our production facility. It is fully equipped with trained staff and automated important machine,  And deepening more premium and valuable modern Interior Designing in Bangalore by bringing you high-end design and delivers best services at affordable Cost. Our mission is to convert our customers dreams and expectations into reality</h2>
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                        
                         <?php foreach($whatWeDoList as $whatwedoitem){ $count=0;?>
                        <div class="col-md-4 wow fadeInLeft">
                            <h3><span class="id-color"> <?php echo $whatwedoitem->IMGTITLE; ?></span></h3>
                            <?php echo $whatwedoitem->IMGDESC; ?>
                            <div class="spacer-single"></div>
                            <img src="<?php echo base_url().$whatwedoitem->IMGPATH; ?>" class="img-responsive" alt="">
                           
                           
                            
                        <!--    <a href="#" class="btn-line btn-fullwidth">Read More</a> --> 
                        </div>
                       
                         <?php $count++; if($count%3==0){ ?>
                            <div class="spacer-single"></div>
                         <?php } 
                         }?>
                         
                     
   



            <!-- section begin -->
            <section id="section-steps" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Our Process</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                           
                            <div class="de_tab tab_steps">
                                 <ul class="de_nav">
                                      <?php $var=1;
                                      foreach($processlist as $processitem){ ?>
                                     <?php if($var==1){ ?>
                 <li class="active wow fadeIn" data-wow-delay="0s"><span><?php echo $processitem->name; ?></span><div class="v-border"></div></li>
                                     <?php }else{?>
                                     
                <li class=" wow fadeIn" data-wow-delay="0s"><span><?php echo $processitem->name; ?></span><div class="v-border"></div></li>
                                      <?php }} ?>
                                                                       </ul>


                                <div class="de_tab_content">
                               <?php $var=1;
                                      foreach($processlist as $processitem2){ ?>
                                <div id="tab1<?php echo $var;?>"><?php echo $processitem2->Description; ?></div>
                                      <?php $var++; } ?>                        
                                   <!-- <div id="tab2">
                                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                   </div>
                                   
                                   <div id="tab3">
                                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                   </div>
                                   
                                   <div id="tab4">
                                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                   </div> -->

                                </div>

                            </div>
                          
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


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

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                   
 <?php
                                      foreach($projectsList as $projItem){ ?>
                    <!-- gallery item -->
                    <div class="item <?php echo $projItem->ITEMTYPE;?>">
                        <div class="picframe">
                            <a class="simple-ajax-popup-align-top" href="#">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $projItem->IMGTITLE;?></span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php echo base_url().$projItem->IMGPATH; ?>" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->
                    
                                      <?php } ?>


                  

                </div>

                <div id="loader-area">
                    <div class="project-load"></div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                <a href="<?php echo base_url();?>ProjectControl/ongoingproject" class="btn btn-line-black btn-big">View All Projects</a>
            </section>
            <!-- logo carousel section close -->


            <!-- section begin -->
            <section id="section-testimonial" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Customer Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="de_carousel  wow fadeInUp" data-wow-delay=".3s">

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>II am always impressed with the service from Live in Passion, they completed our project with excellent space management and latest trend decor within the time span, and material selection was fantastic, I strongly recommended for the future projects and I wish them all success in all your future ventures.</p>
                                    <div class="de_testi_by">
                                        Customer
                                    </div>
                                </blockquote>

                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I totally recommended Live in Passion Service and quality of work they provided thanks to their innovative work for the problems we faced. They were having very knowledgeable Interior Designers and they managed to finish the project in a tight schedule. What more could one ask from your designer! Definitely, they can get a thumbs up from my side for sure. </p>
                                    <div class="de_testi_by">
                                         Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>It was a great experience with Live in Passion Interior Designer for their excellent work done for my home, they creative designing and professional work of entire our home within the time and they were not compromised with the quality of products. From the beginning, they provided a 3D presentation. So, that we will get an idea you recommended for the upcoming projects.</p>
                                    <div class="de_testi_by">
                                        - Vinod Kumar, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        James, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

        </div>

    
    <!--  ================================================== -->
    <!-- @include('contents.mains.switcher') -->

 
</body>
</body>
</html>