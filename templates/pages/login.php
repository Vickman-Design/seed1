
    <!-- Start Slider Area -->
    <div class="login-area area-padding fix">
        <div class="login-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="login-form">
                        <h4 class="login-title text-center">Login</h4>
                        <h3><?= $Self->Toast()?></h3>
                        <form action="./forms/login" method="post" class="log-form">
                            <input type="text" id="name" name="email" class="form-control" placeholder="Username" required data-error="Please enter your name">
                            <input type="password" name="password" id="msg_subject" class="form-control" placeholder="Password" required data-error="Please enter your message subject">
                            <div class="check-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Remember me</label>
                                </div>
                                <a class="text-muted" href="./">Forgot password?</a>
                            </div>
                            <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                            <div class="clearfix"></div>
                            <div class="clear"></div>
                            <div class="sign-icon">
                               
                                <div class="acc-not">Don`t have an account?  <a href="./registration">Signup</a></div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- End Slider Area -->

    <!-- All JS here -->
