<!DOCTYPE html>
<html>
    <head>
        <?php echo $headerscript ?>
    </head>
    <body class="withAnimation withNavTop">
        <div class="wrapper">
            <header>

            </header>

            <div class="container">

            </div>

            <?php echo $topnav; ?>

            <nav class="navbar navbar-brick navbar-fixed-top" role="navigation">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4 text-center">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-href="#" class="navbar-toggle toggle-sidebar pull-left" >
                                    <i class="icon-house"></i>
                                </button>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-sm visible-xs" href="#"><img src="<?php echo Uri::base(false); ?>assets/img/logo-smal.png" alt=""></a>
                                <a class="logo-small invisible hidden-xs hidden-sm" href="#"><img src="<?php echo Uri::base(false); ?>assets/img/logo-smal.png" alt=""></a>
                            </div>
                            <p class="navbar-text scroll-move visible-md visible-lg">Contact Us: <strong>1-800-765-BRICK</strong></p>
                            <div class="navbar-logo visible-md visible-lg">
                                <div class="logo" data-bg="<?php echo Uri::base(false); ?>assets/img/logo.png" data-height="150"></div>
                            </div>
                        </div>


                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php echo $nav; ?>
                        <!-- /.navbar-collapse -->

                    </div>
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">

            </div>

            <?php echo $slider; ?>

            <div class="container">

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 sidebar-top">
                        <?php echo $rightbar; ?>
                    </div>
                    <hr class="hidden-md hidden-lg hidden-xs">
                    <div class="col-md-8">              
                        <?php echo $propertylist2; ?>
                        <hr class="visible-xs">
                    </div>
                </div>
            </div>
            <div class="container">

            </div>
            <?php echo $footer ?>
            <a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>

        </div>
        <!-- SCRIPTS -->
        <?php echo $footerscript; ?>
    </body>

</html>