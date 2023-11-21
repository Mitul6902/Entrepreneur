<?php 

session_start();
require 'code.php';
require 'contact.php';

if (!isset($_SESSION['username'])) {
    header("Location: home.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Entrepreneur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files & Plugins --->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<!--- Plugins File  --->
  <script src="assets/css/jquery.js"></script> 
  <script src="assets/css/jquery-validation-1.19.3/dist/jquery.validate.js"></script>
  <script src="assets/css/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>

 
  <script>
      $(document).ready(function () {

// Change default JQuery validation Messages.
$("#form_validate").validate({
        rules: {
            mname: "required",
            mobile: "required",
            address: "required",
            email: "required email",
        },
        messages: {
            mname: "Member name is required",
            mobile: "Mobile no is required",
            address: "Address is required",
            email: {
                required: "Email id is required",
                email: "Please enter a valid email id.",
            }
        }
    })

            $("#submit").click(function(){
            var valid = $("#form_validate").valid();
                if(!valid)
                return;
           alert("Ticket Registred Successfully");

        });

        $("#contactform_validate").validate({
        rules: {
            name: "required",
            email: "required email",
            subject: "required",
            message: "required ",
        },
        messages: {
          name: "Member name is required",
          subject: "Subject is required",
          message: "Message is required",
            email: {
                required: "Email id is required",
                email: "Please enter a valid email id.",
            }
        }
    })

            $("#submit").click(function(){
            var valid = $("#contactform_validate").valid();
                if(!valid)
                return;
           alert("Form Registred Successfully");

        });
        });
    </script>
  <style>
        .error{
            color:red;
        }
    #user{
      color:white;
    }
    #user p {
    padding-left: 44px;
    margin: 26px 0 29px 0;
    padding-right: 0;
    }
  </style>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        
        <a href="index.html" class="scrollto"><img src="assets/img/logo.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#buy-tickets">Buy Tickets</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a class="buy-tickets scrollto" href="#Signin">Sign in</a>
      <a class="buy-t ickets scrollto" href="#Signup">Sign Up</a> -->
      <div id="user">
      <?php echo "<p>Hey, " . $_SESSION['username'] . "</p>"; ?>
    </div>
    <a class="buy-tickets scrollto" href="logout.php">Logout</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Annual<br><span>Entrepreneur</span> Conference</h1>
      <p class="mb-4 pb-0">12-14 December, Downtown Conference Center, Surat</p>
      <a href="#buy-tickets" class="about-btn scrollto">Buy Tickets</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Hello Members,In The Entrepreneur event all our india's highest leading brands Co-Founder and CEO comes in the event, To guid and Motivate you to be an Entrepreneur in Your Life.  .</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, Surat</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>12-14 December</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Speakers</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/8.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Ashneer Grover</a></h3>
                <p>MD and Co-Founder of BharatPe</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/speakers/1.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Namita Thapar </a></h3>
                <p>Executive Director at Emcure Pharma </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/speakers/7.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">	Anupam Mittal</a></h3>
                <p>Founder & CEO of People Group</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">	Peyush Bansal </a></h3>
                <p>Founder & CEO of Lenskart.com </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Aman Gupta</a></h3>
                <p>Co-Founder & CMO of BoAt</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/speakers/2.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">	Ghazal Alagh </a></h3>
                <p>Co-Founder & CIO of Mamaearth </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Schedule</h2>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Event Members Registration And Sitting Arragements. </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/8.jpg" alt="Ashneer Grover">
                </div>
                <h4>Ashneer Grover<span></span></h4>
                <p>MD and Co-Founder of BharatPe</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Namita Thapar">
                </div>
                <h4>Namita Thapar<span></span></h4>
                <p>Executive Director at Emcure Pharma </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/7.jpg" alt="Anupam Mittal">
                </div>
                <h4>Anupam Mittal </h4>
                <p>Founder & CEO of People Group.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Peyush Bansal">
                </div>
                <h4>Peyush Bansal</h4>
                <p>Founder & CEO of Lenskart.com </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Aman Gupta">
                </div>
                <h4>Aman Gupta</h4>
                <p>Co-Founder & CMO of BoAt</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Ghazal Alagh">
                </div>
                <h4>Ghazal Alagh</h4>
                <p>Co-Founder & CIO of Mamaearth </p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/8.jpg" alt="Ashneer Grover">
                </div>
                <h4>Ashneer Grover<span></span></h4>
                <p>MD and Co-Founder of BharatPe</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Ghazal Alagh">
                </div>
                <h4>Ghazal Alagh</h4>
                <p>Co-Founder & CIO of Mamaearth </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Aman Gupta">
                </div>
                <h4>Aman Gupta</h4>
                <p>Co-Founder & CMO of BoAt</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Namita Thapar">
                </div>
                <h4>Namita Thapar<span></span></h4>
                <p>Executive Director at Emcure Pharma </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Peyush Bansal">
                </div>
                <h4>Peyush Bansal</h4>
                <p>Founder & CEO of Lenskart.com </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/7.jpg" alt="Anupam Mittal">
                </div>
                <h4>Anupam Mittal </h4>
                <p>Founder & CEO of People Group.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Ghazal Alagh">
                </div>
                <h4>Ghazal Alagh</h4>
                <p>Co-Founder & CIO of Mamaearth </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Namita Thapar">
                </div>
                <h4>Namita Thapar<span></span></h4>
                <p>Executive Director at Emcure Pharma </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/7.jpg" alt="Anupam Mittal">
                </div>
                <h4>Anupam Mittal </h4>
                <p>Founder & CEO of People Group.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/8.jpg" alt="Ashneer Grover">
                </div>
                <h4>Ashneer Grover<span></span></h4>
                <p>MD and Co-Founder of BharatPe</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Peyush Bansal">
                </div>
                <h4>Peyush Bansal</h4>
                <p>Founder & CEO of Lenskart.com </p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Aman Gupta">
                </div>
                <h4>Aman Gupta</h4>
                <p>Co-Founder & CMO of BoAt</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 3-->

        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center"> &#x20B9 4999</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center"> &#x20B9 6999</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center"> &#x20B9 9999</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="code.php" id="form_validate">
                <div class="form-group">
                  <input type="text" class="form-control" name="mname" placeholder="Your Name & Surname" >
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="email" placeholder="Your Email Id">
                </div>
                <div class="form-group mt-3" >
                <label for="gender" class="form-control-label">Select Your Gender :</label>
                <span style="margin-left:25px;">
                <input type="radio" name="gender" id="gendermale" value="Male" checked>
                <label for="gendermale" >Male</label>
                </span>
                <span style="margin-left:25px;">
                <input type="radio" name="gender" id="genderfemale" value="Female" > 
                <label for="genderfemale">Female</label>
              </span>
            </div>
                <div class="form-group mt-3">
              <input type="number" class="form-control" placeholder="Your Mobile No" name="mobile">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="address" placeholder="Your Address" value="address"></textarea>
                </div>
                <div class="text-center mt-3">
                  <button id="submit" type="submit"  name="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Surat Street, GJ 395004, Surat</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 89589 55488</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="contact.php" method="post"  class="php-email-form" id="contactform_validate">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
            </div>
            <div class="my-3">
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="#MitulChotaliya">Mitul Chotaliya</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>