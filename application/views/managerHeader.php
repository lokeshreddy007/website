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
    <body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php
        // put your code here
        ?>
        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  <!-- <a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url();?>images/logo.png"></a>-->
      
      
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">DASH BOARD</a></li>
         <li><a href="<?php echo base_url();?>ProjectControl/showSliders">SLIDERS</a></li>
        <li><a href="<?php echo base_url();?>ProjectControl/whatWeDoList">What-We-Do</a></li>
        <li><a href="<?php echo base_url();?>ProjectControl/showProjectsList">PROJECTS</a></li>
       <li><a href="<?php echo base_url();?>ProjectControl/ourProcessList">OURPROCESS</a></li>
         <li><a href="<?php echo base_url();?>UserControl/managerLogin">LOG OUT</a></li>
        
        
      
        
        
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    </body>
</html>
