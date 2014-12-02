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

            <?php echo $nav; ?>

            <div class="container">

            </div>

            <section class="parallax parallax-header" style="background-image: url('assets/images/demo-content/aboutus_parallax.jpg')">

            </section>

            <div class="container">

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 sidebar-top-small">
                       <?php echo $rightbar;?>
                    </div>
                    <div class="col-md-8">
                        <?php echo $contain; ?>                    
                    </div>
                </div>
            </div>

            <div class="container">

            </div>

            <?php echo $footer; ?>
            <a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>
        </div>

        <!-- SCRIPTS -->
        <?php echo $footerscript; ?>    
    </body>
</html>