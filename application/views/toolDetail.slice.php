<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>รายละเอียดของบริจาค</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    div.gallery img {
        width: 450px;
        height: 300px;
    }

    .navbar-inverse .navbar-nav > .active > a,
    .navbar-inverse .navbar-nav > .active > a:focus {
      color: white;
      background-color: #3E2723;
    }

    .navbar-inverse .navbar-nav > .active > a:hover {
      color: black;
      background-color: white;
    }

  </style>
<body style="background-color:#ac936e">
      <nav class="navbar navbar-inverse" style="background-color:#3E2723;margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:white">WeShare</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Home</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Statistic</a></li>
    </ul>
  </div>
</nav>
    <div style="background-color:#efebe9;width:60%;" class="container">
      <br>
    	<div class="text-center" style="color: black; text-shadow: black 0.5em 0.5em 0.9em"> <h1> รายละเอียดของบริจาค </h1></div><br><br>
      <div class="gallery text-center" >
        <img id="img" style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%); border-width: 5px;
        -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;"src="<?php echo base_url($detail['imglink']) ?> ">
      </div><br><br>

      <p class="col-md-3"></p>
      <p style="color:#black" class="col-md-6">
      <b style="font-size:16px">ชื่ออุปกรณ์  :</b> {{ $detail['toolname'] }}<br>
      <b style="font-size:16px">รายละเอียด  :</b> {{ $detail['description'] }}<br>
      <b style="font-size:16px">วันที่บริจาค :</b> {{ $detail['date'] }}<br>
      <b style="font-size:16px">สภาพอุปกรณ์ :</b> {{ $detail['namestatus'] }}<br>
      <b style="font-size:16px">ขนาด :</b>  {{ $detail['namesize'] }}<br>
      <b style="font-size:16px">ผู้บริจาค :</b>  {{ $detail['donater'] }}<br><br></p><br>
    </div>

    <div class="text-center container" style="background-color:#efebe9;width:60%;">
    <a id="back" href='<?php echo site_url('/tool' ) ?>' class="btn btn-warning btn-lg page-scroll">Back</a>
    <br><br>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

  </body>
</html>
