<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Technetium</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poor+Story"
      rel="stylesheet"
    />
    <link href="css/element.css" rel="stylesheet" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav
              class="navbar navbar-default navbar-fixed-top"
              role="navigation"
            >
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle"
                  data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"
                  ><i class="fa fa-tumblr-square"></i> Technetium</a
                >
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                class="collapse navbar-collapse"
                id="bs-example-navbar-collapse-1"
              >
                <ul class="nav navbar-nav navbar-right">
                  <li class=""><a href="index.html">Home</a></li>
                  <li class=""><a href="about.html">About</a></li>
                  <!-- <li class=""><a href="blog.html">Blog</a></li>
						  <li class=""><a href="detail.html">Detail</a></li> -->
                  <li>
                    <a class="connect" href="contact.html">Contact Us</a>
                  </li>
                  <li class="active">
                    <a class="connect" href="warranty.html"
                      >Warranty Registration</a
                    >
                  </li>
                  <!-- <li class="dropdown">
                    <a
                      class="dropdown-toggle"
                      data-toggle="dropdown"
                      href="blog.html"
                      aria-expanded="false"
                      >Dropdown <span class="caret"></span
                    ></a>
                    <ul class="dropdown-menu box_inner">
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="detail.html">Detail</a></li>
                      <li><a href="about.html">About</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="clearfix detail_bg">
      <div class="about_bg clearfix">
        <div class="container">
          <div class="row">
            <div class="about clearfix">
              <h2>Register<span class="abort"> your</span> Warranty</h2>
              <p><a href="index.html">Home</a> / Contact Us</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="clearfix">
          <h3><center>Thank you for your registration! Your warranty details have been registered.</center></h5>
    </section>

    <section id="footer" class="clearfix">
      <div class="container">
        <div class="row">
          <div class="footer clearfix">
            <h2>
              I’d Like to Learn More <br />About
              <span class="linier_tab">Te</span>chnitium
            </h2>
            <div class="input-group col-sm-6 footer_left clearfix">
              <input
                type="text"
                class="search-query form-control form-control_course"
                placeholder="Enter your email"
              />
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <span class="location">SIGN UP</span>
                </button>
              </span>
            </div>
            <ul>
              <li>
                <a href="#"><i class="fa fa-github"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="different">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
            </ul>
            <p class="website">
              © 2013 Your Website Name. All rights reserved | Design by<a
                href="http://www.templateonweb.com"
              >
                TemplateOnWeb</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#Carousel").carousel({
          interval: 5000,
        });
      });
    </script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
  </body>
</html>

<?php

    $db = pg_connect("host=ec2-23-23-151-191.compute-1.amazonaws.com port=5432 dbname=df8gd2jv8ub2pb user=wslqvajembykux password=df764afa69c2a4037e8f79444c6732ec3219059fa3197fbd60a4dc90bc797850");
    $query = "insert into production.warranty_registration__c (name, email__c, date_of_purchase__c, phonebrandmodel__c, serial__c) VALUES ('$_POST[name]','$_POST[email]',
    '$_POST[datepurchased]', '$_POST[phonebrandmodel]', '$_POST[serial]')";
    $result = pg_query($query); 

?>