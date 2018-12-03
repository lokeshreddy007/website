<%@page import="java.sql.SQLException"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.PreparedStatement"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.Connection"%>
<%@page import="java.sql.SQLException"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Minimal Bootstrap Theme">
    <meta name="keywords" content="onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


   
</head>
<body class="page-projects">

    <div id="wrapper">


       




  <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>On Going Projects</h1>
                        <ul class="crumb">
                            <li><a href="<?php echo base_url();?>Welcome/index">Home</a></li>
                            <li class="sep">/</li>
                            <li>On Going Projects</li>
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
            <!-- section close -->


            <!-- section begin -->
            <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action">
                <a href="<?php echo base_url();?>ProjectControl/contactus" class="btn btn-line-black btn-big">Get Quotation</a>
            </section>
            <!-- logo carousel section close -->

        </div>


</body>
</html>