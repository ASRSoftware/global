<div class="nav-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table pull-right">
                    <?php if (Auth::check()) { ?>
                    <div class="table-cell">
                        <a href="#"><i class="fa fa-home"></i> <span class="i-label">Submit Property</span></a>
                    </div>
                    <div class="table-cell">
                        <a href="#"><i class="fa fa-list"></i> <span class="i-label">My Properties</span></a>
                    </div>
                    <div class="table-cell">
                        <a href="#"><i class="fa fa-user"></i> <span class="i-label">Welcome <?php echo  Auth::get_screen_name();?></span></a>
                    </div>
                    <div class="table-cell">
                        <a href="<?php echo Uri::base(false);?>user/logout"> <i class="fa fa-sign-out"></i> <span class="i-label">Logout</span></a>
                    </div>
                    <?php } else { ?>
                    <div class="table-cell">
                            <a href="#" onclick="menu.show('login')" ><i class="fa fa-user"></i> <span class="i-label">Login</span></a>
                        </div>
                        <div class="table-cell">
                            <a href="#" onclick="menu.show('signup')" ><i class="fa fa-user"></i> <span class="i-label">Sign-up</span></a>
                        </div>
                    <?php } ?>
                    <div class="table-cell hidden-xs">
                        <ul class="socials">
                            <li>
                                <a href="https://www.facebook.com/createITpl" target="_blank" data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/createitpl" target="_blank" data-toggle="tooltip" data-placement="left" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Google +"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="RSS"><i class="fa fa-rss"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>

<div class="model-container" style="display:none">
    <div class="model-close" onclick="menu.hideAll()"></div>
    <div class="model-bg"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="model-inner">
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-default btn-lg btn-login" onclick="menu.show('login');">Login</a>
                        <a class="btn btn-default btn-lg btn-signup" onclick="menu.show('signup');">Signup</a>
                    </div>
                    <div class="spacer" style="height: 10px;"></div>
                    <div class="form" id="model-login">
                        <form id="gl-login" >
                            <div class="form-group">
                                <label>Your username</label>
                                <input class="form-control" type="text" name="user_txt" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Your password</label>
                                <input class="form-control" type="password" name="password_txt" placeholder="Password">
                            </div>
                            <div class="clear" id="login-msg" style="clear:both"></div>
                            <div class="form-group">
                                <button type="submit" id="gl-login-btn" class="btn btn-primary btn-lg pull-right">Login</button>
                            </div>
                            <div class="clear" style="clear:both"></div>
                        </form>
                    </div>
                    <div class="form" id="model-signup">
                        <form id="gl-sign">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="gl-name" type="text" placeholder="Username">
                                <span id="gl-sign-username" class="validation"></span>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" name="gl-password" type="password" placeholder="Password">
                                <span id="gl-sign-password" class="validation"></span>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="gl-email" type="email" placeholder="Email">
                                <span id="gl-sign-email" class="validation"></span>
                            </div>
                            <span id="msg-box">
                            </span>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg pull-right">Register</button>
                            </div>
                            <div class="clear" style="clear:both"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>