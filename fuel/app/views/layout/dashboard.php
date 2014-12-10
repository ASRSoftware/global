<!DOCTYPE html>
<html>
<head>
    <?php echo $headerscript; ?>
</head>
<body class="withAnimation">
<div class="wrapper">
    <header>

    </header>

    <div class="container">

    </div>
      <?php echo $nav;?>

    <div class="container">

    </div>

    <section class="parallax parallax-header" style="background-image: url('<?php echo Uri::base(false);?>assets/img/demo-content/agents_parallax.jpg')">

    </section>

    <div class="container">

    </div>

    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li><li class="active">User</li>
                </ol>
            </div>
        </div>
    </div>
        <div class="row">
            <?php echo $userdetails; ?>
        </div>
        <div class="row">
           <?php echo $contain; ?>
        </div>
            
        <div class="row">
            
        </div>
    </div>

    <div class="container">

    </div>

     <?php echo $footer; ?>

    <a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>

</div>
    <!-- SCRIPTS -->
    <?php echo $footerscript; ?>
<!-- switcher -->


<!-- end frame -->
</body>
</html>