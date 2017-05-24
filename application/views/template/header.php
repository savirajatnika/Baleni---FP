<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BALENI</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->    
    <style type="text/css">   
    .act{
        background-color:#c52d2f;
        color: #fff;
    }
    </style>
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body class="homepage">

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner" style="background-color: #000000">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assets/images/list/logo.jpeg" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" >
                        <li><a href="<?php echo base_url(); ?>index.php" class="<?php if(is_null($this->uri->segment(2))===true){echo 'act';}?>" >Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Home/about" class="<?php if($this->uri->segment(2)==="about"){echo 'act';}?>" >About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Home/order" class="<?php if($this->uri->segment(2)==="order"){echo 'act';}?>" >Order</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Home/pricelist" class="<?php if($this->uri->segment(2)==="price"){echo 'act';}?>" >Price List</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Home/faq" class="<?php if($this->uri->segment(2)==="faq"){echo 'act';}?>">FAQ</a></li> 
                        <li><a href="<?php echo base_url(); ?>index.php/Home/contact" class="<?php if($this->uri->segment(2)==="contact"){echo 'act';}?>">Contact</a></li> 
                </div>
                
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->