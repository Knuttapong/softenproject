<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>รายการของบริจาค</title>

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
    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 300px;
      color: white;
    }
    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: 200px;
    }

    div.desc {
        padding: 15px;
        text-align: center;
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
    <nav class="navbar navbar-inverse" style="background-color:#3E2723;">
      <div class="container-fluid" >
        <div class="navbar-header">
          <a class="navbar-brand" style="color:white" href="">WeShare</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a class="menu"  href="">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a class="menu"  href="">Statistic</a></li>
        </ul>
      </div>
    </nav>
  <!-- gallery -->
    <div id = "container" name="container" class="container" style="width:100%">

      <div class="text-center" style="color: white; text-shadow: black 0.5em 0.5em 0.9em"> <h1> รายการของบริจาค </h1></div><br><br>

      <div class="container " style="width:73%"  color="#a1887f">
    			<tbody>
    			@foreach ($toollist as $tool)
            <div class="gallery" style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%); border-width: 5px;
                 -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;" >
                  <a id="detailtool" href='<?php echo site_url('/tool/detail/'.$tool['tid']) ?>'>
                    <img src="<?php echo base_url($tool['imglink']) ?>" height="1150" width="200">
                  </a>
                  <div  style="color:#000000;text-shadow: black 0.1em 0.1em 0.1em" class="desc"><h3>	{{ $tool['toolname'] }}</h3></div>
            </div>
        	@endforeach

    			</tbody>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

  </body>
</html>
