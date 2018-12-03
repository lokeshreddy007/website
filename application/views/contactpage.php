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
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact</h1>
                        <ul class="crumb">
                            <li><a href="<?php echo base_url();?>Welcome/index">Home</a></li>
                            <li class="sep">/</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top">
           
            <div class="container" style="padding-top: 90px">
                <div class="row">
                We provide Product based, Carpentry services , Design Product services , Production services to our valuable customers please reach us with your plan , we will improve that plan with best ideas of our employee. We would love to serve you more better.We are Happy to help you always.<br/><br/><br/>
                    <div class="col-md-8">
                        <h3>Customer Registration</h3>
                        <form name="contactForm" id='contact_form' method="post" action='<?php echo base_url();?>UserControl/customerRegistration'>
                            <div class="row">
                            <input name="_method" type="hidden" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-4">
                                    <div> 
                                        <select name="service" id="service" class="form-control">
                                            <option value="Design">Design</option>
                                            <option value="Production">Production</option>
                                            <option value="Carpentry">Carpentry</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>

                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='text' name='uname' id='uname' class="form-control" placeholder="Your Name" required>
                                    </div>

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='text' name='uemail' id='uemail' class="form-control" placeholder="Your Email"required>
                                   </div>                                   

                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                    <div>
                                        <input type='text' name='umobile' id='umobile' class="form-control" placeholder="Your Phone"required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div id='message_error' class='error'>Please enter your message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <p id='submit'>
                                        <input type='submit'   value='Submit Form' class="btn btn-line">
                                    </p>
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                </div>
                            </div>
                        </form>

                   
                </div>
            </div>

         
        </div>
  
    
    </div>

              <!-- footer begin -->
    </body>
</html>
