<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/my_styles.css');?>" >
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div class="header-img">
            <div id="header-text">MiguelHuerta.co.nf</div>
        </div>
        <div class="nav-menu">
            <div id="nav-menu"
              <ul>
                  <li><a href="<?php echo site_url();?>" id="home">Home</a></li>
                  <li><a href="<?php echo site_url('about');?>" id="about">About</a></li>
                  <li><a href="<?php echo site_url('project');?>" id="projects">Projects</a></li>
                  <li><a href="<?php echo site_url('download');?>" id="download">Downloads</a></li>
                  <li><a href="<?php echo site_url('contact');?>" id="contact">Contact</a></li>
              </ul>
            </div>
        </div>
    
