<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['bot1'] != '' || $_POST['bot2'] != 'yoloswagXxxX') {
            die('Bot detected');
        }

        $msg = <<<EOT
Hi Brad,

{$_POST['panda']} would like to start coming to curry on Fridays.

Regards,
  curryfriday.com
EOT;

        $hdrs = 'From: curry@curryfriday.com' . "\r\n" .
                   'Reply-To: curry@curryfriday.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        $args = '-f curry@curryfriday.com';

        mail('brad@gizmoguy.net.nz', 'New Curry Friday Signup',
            $msg, $hdrs, $args);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curry Friday</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      .carousel {
        margin-bottom: 60px;
      }

      .carousel .container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
      }

      .carousel .item {
        height: 400px;
      }

      .carousel img {
          min-width: 100%;
          height: 400px;
       }

      .carousel .caption {
        background-color: transparent;
        position: static;
        max-width: 700px;
        padding: 0 20px;
        margin-bottom: 100px;
      }
      .carousel .caption h1,
      .carousel .caption .lead {
        margin: 0;
        line-height: 1.25;
        color: #fff;
        text-shadow: 0 1px 1px rgba(0,0,0,.4);
      }
      .carousel .caption .btn {
        margin-top: 10px;
      }

      @media (max-width: 979px) {
        .carousel .item {
          height: 400px;
        }
        .carousel img {
          width: auto;
          height: 400px;
        }
      }

      @media (max-width: 767px) {
        .carousel {
          margin-left: -20px;
          margin-right: -20px;
        }
        .carousel .container {

        }
        .carousel .item {
          height: 300px;
        }
        .carousel img {
          height: 300px;
        }
        .carousel-caption {
          width: 65%;
          padding: 0 70px;
          margin-bottom: 40px;
        }
        .carousel-caption h1 {
          font-size: 30px;
        }
        .carousel-caption .lead,
        .carousel-caption .btn {
          font-size: 18px;
        }
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/spice.jpg" alt="">
          <div class="container">
            <div class="caption">
              <h1>Curry Friday</h1>
              <p class="lead">The most popular curry meetup in Hamilton (soon to be the world)</p>
              <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal" role="button">Get on the invite list</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <p>Thanks for signing up!</p>
        <p><a href="index">Go back</a></p>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>
