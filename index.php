<?php

require 'includes/config.php';
require 'includes/aboutPage.class.php';
require 'includes/vcard.class.php';

$profile = new AboutPage($info);

if(array_key_exists('json',$_GET)){
  $profile->generateJSON();
  exit;
}
else if(array_key_exists('vcard',$_GET)){
  $profile->downloadVcard();
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Essien Ubong - My Portfolio</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1><span class="name">Essien Ubong</span></h1>
          <p>Web Designer & Software Developer</p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Essien Ubong</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"><a href="#page-top"></a></li>
          <li><a class="page-scroll" href="#about">About</a></li>
          <li><a class="page-scroll" href="#skills">Skills</a></li>
          <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
          <li><a class="page-scroll" href="#resume">Resume</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
          <li><a class= "page-scroll" href="#blog">Blog</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="img/essien4.jpg" class="img-responsive"></div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
          <p>I am an innovative person full if ideas and passion for success. I am purpose oriented with rare qualities, a team player with motivational attitude, i see perfection in perfection, always trying new things and taking up new challenges.</p>
          <p>I have spent the last 3 years developing my IT skills, learning new tools and technology at any given opportunity, as i strive to contribute to the advancement of the profession while improving my professional skills.</p>
          <p class="text-center"><a class="btn btn-primary" href="?vcard"><i class="fa fa-download"></i> Download card as Vcard</a>  <a class="btn btn-primary" href="?json"><i class="fa fa-download"></i> Download card as Json</a></p>
          <div class="social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google +"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/in/ubong-essien-1b9047103?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Skills</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="75"> <span class="percent">75</span> </span>
        <h4>HTML5</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="75"> <span class="percent">75</span> </span>
        <h4>CSS3</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
        <h4>jQuery</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="50"> <span class="percent">50</span> </span>
        <h4>Android</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="50"> <span class="percent">50</span> </span>
        <h4>C++</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="65"> <span class="percent">60</span> </span>
        <h4>C#</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="70"> <span class="percent">65</span> </span>
        <h4>Java</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="75"> <span class="percent">65</span> </span>
        <h4>PHP</h4>
      </div>
      <div class="col-md-15 col-sm-3 skill"> <span class="chart" data-percent="75"> <span class="percent">65</span> </span>
        <h4>MySQL</h4>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".app">Software Development</a></li>
            <li><a href="#" data-filter=".branding">Other Interest</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://www.dropbox.com/home?preview=yess.portfolio.zip">
              <div class="hover-text">
                <h4>Project Title: Team Project</h4>
                <small>Web Design: Online Bus Booking System</small>
                <small><h6><strong>Description:</strong></h6>This project is a web application for course work. It is an online bus booking system, it covers bus booking and cancelation, seat reservation and ticketing</small> </div>
              <img src="img/portfolio/wbdev1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://www.dropbox.com/home?preview=league+table.zip">
              <div class="hover-text">
                <h4>Project Title: League Table</h4>
                <small>Software Development: Java</small>
                <small><h6><strong>Description:</strong></h6>This project is a java application for course work. It is a league table generating system, it receives match results and genrate a league table</small> </div>
              <img src="img/portfolio/wbdev8.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://www.essiencorp.com/">
              <div class="hover-text">
                <h4>Project Title:Online store</h4>
                <small>Web Design: Still progress</small>
                <small><h6><strong>Description:</strong></h6>This project is a web application for course work. It is an online store, it covers signup and signOut, Email verification, feed back </small> </div>
              <img src="img/portfolio/wbdev5.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <small><h6><strong>Description:</strong></h6>This project is a web application for course work. It is an online store, it covers signup and signOut, Email verification, feed back </small> </div>
              <img src="img/portfolio/wbdev6.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://www.dropbox.com/home/Essien's%20final%20year%20project%20files?preview=ConsignmentStore.zip">
              <div class="hover-text">
                <h4>cConsignment Store</h4>
                <small>App Development: Desktop/Mobile</small>
                <small><h6><strong>Description:</strong></h6>This project is a C# application for course work. It is a desktop/mobile store, displays items with supliers name, remits profit of sold item to store owner and supliers.</small> </div>
              <img src="img/portfolio/wbdev7.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small> </div>
              <img src="img/portfolio/wbdev3.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://www.dropbox.com/home?preview=bird+hunt+game.zip">
              <div class="hover-text">
                <h4>Games</h4>
                <small>Game Development, Android</small>
                <small><h6><strong>Description:</strong></h6>This project is an android application for course work. It is a bird shooting game, display high scores from number of kills</small> </div>
              <img src="img/portfolio/wbdev4.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://www.dropbox.com/home/Essien's%20final%20year%20project%20files?preview=project_assignment.zip">
              <div class="hover-text">
                <h4>Online Store</h4>
                <small>Web Design: Online Store</small>
                <small><h6><strong>Description:</strong></h6>This project is a web application for course work. It is an online store, features cart, paypal payment method, user and admin functions.</small> </div>
              <img src="img/portfolio/wbdev2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Some Stats</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
        <div class="achievement-box"> <span class="count">0</span>
          <h4>Happy Clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
        <div class="achievement-box"> <span class="count">2160</span>
          <h4>Hours of Course Work</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
        <div class="achievement-box"> <span class="count">0</span>
          <h4>Awards Won</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
        <div class="achievement-box"> <span class="count">3 </span>
          <h4>Years of Student Experience</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Resume Section -->
<div id="resume" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Experience</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <h4>July 2016 <br>
                - <br>
                Sept 2016 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>KTG Education SOCSIT Department</h4>
                <h4 class="subheading">Project Manager: Intern</h4>
              </div>
              <div class="timeline-body">
                <p><strong>Role:</strong> Project PLanning, Project team cordination, Meeting Scheduling, Project Monitoring and Evaluation, Project front-end design.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Sept 2008 <br>
                - <br>
                Jan 2009 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Department of Lands and Housing, Ministry of Urban and Rural Development.</h4>
                <h4 class="subheading">Layout Design Assisant</h4>
              </div>
              <div class="timeline-body">
                <p><strong>Roles:</strong> Urban policy preparation, Transportation system design, Urban and Rural plan design, Development control supervission.</p>
              </div>
            </div>
          </li>
          <!--<li>
            <div class="timeline-image">
              <h4>Dec 2009 <br>
                - <br>
                May 2011 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">UX Designer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>-->
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title center">
      <h2>Education</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          
          <!-- Education Section-->
          
          <li>
            <div class="timeline-image">
              <h4>2014 <br>
                - <br>
                2016 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Leeds Becketts University</h4>
                <h4 class="subheading">B.sc(Hons) Computing</h4>
              </div>
              <div class="timeline-body">
                <p><strong>Skills:</strong> Basic Java Script programming, Basic Java programming, Basic PHP Programming, Basic SQL/MYSQL programming, Basic C programming, Basic HTML5, Basic CSS 3, Basic c# programing, Basic Android Programming.</br><strong>Projects:</strong> Online store development, League table generator program, APEX application development, Client Directory, Android Game Development</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2011 <br>
                - <br>
                2013 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Federal Polytechnic Oko</h4>
                <h4 class="subheading">(HND) Higher National Diploma Urban and Regional Planning</h4>
              </div>
              <div class="timeline-body">
                <p><strong>Skills:</strong> Plan Design, Develoment Control, Data AnalysiS and Interpretation, Project Presentation </br><strong>Projects:</strong> Evaluation on the impact of transportation on rural communities, Comprehensive Develoment plan design(Research), Rural and Neighbourhood plans.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2004 <br>
                - <br>
                2007 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Rivers State Polytechnic Bori</h4>
                <h4 class="subheading">(ND) National Diploma Urban and Regional Planning</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted"><strong>Skills:</strong> Plan Design, Develoment Control, Data AnalysiS and Interpretation, Project Presentation </br><strong>Projects:</strong> Research on the impact of Urbanization on rural communities, Comprehensive Develoment plan design, Rural and Neighbourhood plans.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>Bandar University Teknolgy Lagenda Mantin,<br>
          Negeri Sembilan, Malaysia</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>Essien007ubong@gmail.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> +60 1137648142</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave me a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
     
      <div>
         <section id="contact" class="map">
              <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.97716521708!2d101.87060031447972!3d2.822795997943774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc4c37096767b%3A0xa0b9ba4b10267602!2sKTG+Education+Group+Malaysia!5e0!3m2!1sen!2smy!4v1476553412549"></iframe>
              <br />
              <small>
                  <a href="https://www.google.com.my/maps/search/KTG+Education+Group+Malaysia,+Bandar+Universiti+Teknologi+Linton,+Batu+12,+Mantin,+Negeri+Sembilan/@2.8227654,101.8706786,17z/data=!3m1!4b1?hl=en"></a>
              </small>
              </iframe>
          </section>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Essien Ubong. Modified by <a href="#">Essien Ubong</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/easypiechart.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>