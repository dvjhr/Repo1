<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Serenity - Modern bootstrap website template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/sequence.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="<?= base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown <?php if($this->uri->segment(2)=="" || $this->uri->segment(2)=="index"){echo "active";}?>">
                  <a href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="dropdown <?php if($this->uri->segment(2)=="addtask" || $this->uri->segment(2)=="viewtask"){echo "active";}?>">
                  <a href="#">Task</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() . 'editorctl/addtask'; ?>">Add Task</a></li>
                    <li><a href="<?php echo base_url() . 'editorctl/viewtask'; ?>">View Task</a></li>
                  </ul>
                </li>
                <li class="dropdown <?php if($this->uri->segment(2)=="addtask" || $this->uri->segment(2)=="viewtask"){echo "active";}?>">
                  <a href="#">Payment</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                  <a href="#"><?= $session_data['nama'] ?> (<?= ucfirst($session_data['nama_grup']); ?>)</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() . 'accountctl/changerole'; ?>"><?= ucfirst($session_data['nama_grup']); ?></a></li>
                    <li><a href="<?php echo base_url() . 'accountctl/profile'; ?>">Profile</a></li>
                    <li><a href="<?php echo base_url() . 'accountctl/logout'; ?> ">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>