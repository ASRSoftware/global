<div class="callback">
    <?php echo Asset::img('callus.png'); ?>
</div>

<footer class="light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4 class="uppercase">About Casa Real Estate</h4>
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p class="text-center">
                    <img src="<?php echo Uri::base(false); ?>assets/images/bricklogo.png" alt="">
                </p>
                <br>
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <!--<div class="info-icons">
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-map-marker motive"></i>
                        </div>
                        <div class="table-cell">
                            331 W 4th St, New York, NY
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-phone motive"></i>
                        </div>
                        <div class="table-cell">
                            (049)  +1 212-242-9502
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-envelope motive"></i>
                        </div>
                        <div class="table-cell">
                            <a href="mailto:hello@brick.com">hello@brick.com</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <hr class="visible-xs">
            <div class="col-md-3 col-sm-6">
                <h4 class="uppercase">Get In Contact</h4>
                <br>
                <div class="info-icons">
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-phone motive"></i>
                        </div>
                        <div class="table-cell">
                            Phone1: +1 212-242-9502
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-phone motive"></i>
                        </div>
                        <div class="table-cell">
                            Phone2: +1 212-242-9503
                        </div>
                    </div>
                    <br>
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-map-marker motive"></i>
                        </div>
                        <div class="table-cell">
                            331 W 4th St, New York, NY<br>
                            Phone +1 212-242-9502
                        </div>
                    </div>
                    <br>
                    <div class="table-row">
                        <div class="table-cell text-center">
                            <i class="fa fa-envelope motive"></i>
                        </div>
                        <div class="table-cell">
                            <a href="mailto:hello@brick.com">hello@brick.com</a><br>
                            www.casa-template.com
                        </div>
                    </div>
                </div>
                <h6>Lets stay in contact</h6>
                <ul class="socials">
                    <li>
                        <a href="https://www.facebook.com/createITpl" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/createitpl" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google +"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix visible-sm"></div>
            <hr class="visible-xs">
            <div class="col-md-6">
                <h4 class="uppercase">Quick Contact</h4>
                <p>Posuere velit aliquet duis mollis, est non commodo luctus et normal.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="successMessage alert alert-success" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>Thank You! We will contact you shortly.</p>
                        </div>
                        <div class="errorMessage alert alert-danger" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>Ups! An error occured. Please try again later.</p>
                        </div>
                    </div>

                </div>

                <form role="form" action="http://brick.html.themeforest.createit.pl/<?php echo Uri::base(false); ?>assets/form/send.php" method="post" class="contactForm validateIt"
                      data-email-subject="Contact Form" data-show-errors="true">
                    <div class="row padding-xs-top">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="field[]" class="form-control"
                                       placeholder="Name *">
                            </div>
                            <div class="form-group">
                                <input required type="tel" name="field[]" class="form-control"
                                       placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input required type="email" name="field[]" class="form-control"
                                       placeholder="Email *">
                            </div>
                            <div class="form-group">
                                <input required type="tel" name="field[]" class="form-control"
                                       placeholder="Fax">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="field[]" required
                                          placeholder="Your message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-grey btn-lg  pull-right">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="quick-links">
                    <div class="quick-link">
                        Countries:
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">
                                Quick Link <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="quick-link">
                        Towns:
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">
                                Quick Link <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer-bottom">
                <div class="col-md-10">
                    <nav class="navigation-footer">
                        <ul>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Cookie Policy</a>
                            </li>
                            <li>
                                <a href="#">Social Media Terms</a>
                            </li>
                            <li>
                                <a href="#">Satutory Information</a>
                            </li>
                            <li>
                                <a href="#">Supply Chain</a>
                            </li>
                            <li>
                                <a href="#">Sitemap</a>
                            </li>
                            <li>
                                <a href="#">Mobile Site</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 text-right ">
                    © createIT 2014
                </div>
            </div>
        </div>

    </div>
    <div style="height: 100px;"></div>
</footer>
