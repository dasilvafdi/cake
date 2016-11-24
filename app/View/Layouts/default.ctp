<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <!-- Use bootstrap css-->
    <?= $this->Html->css('bootstrap'); ?>
    <?= $this->Html->css('bootstrap-responsive'); ?>

    <!-- Use personnal css-->
    <?= $this->Html->css('css'); ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <a class="brand" href="#"><?= $this->fetch('title'); ?></a>
        
      </div>
    </div>

    <div class="container">

      <?= $this->fetch('content'); ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Use google scripts-->
    <?= $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquerry/1.9.1/jquery.min.js');?>

    <!-- Use bootstrap script-->
    <?= $this->Html->script('bootstrap');?>

    <!-- Use personnal script-->
    <?= $this->Html->script('script');?>
  </body>
</html>
