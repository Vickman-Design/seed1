<!-- Start Slider Area -->
<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="login-form signup-form">
                    <h4 class="login-title text-center">Create an Account</h4>
                    <form method="POST" action="./forms/register" class="log-form">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required data-error="Please enter your name"> 
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required data-error="Please enter your email">
                        <input type="text" name="username" id="name" class="form-control" placeholder="Username" required data-error="Please enter your username">
                         <input type="text" name="referer" class="form-control" placeholder="Enter referer id" value="<?= @$referer?>"  <?= @$referer ? 'readonly': ''?>>
                        <input type="password" name="password" id="msg_subject" class="form-control" placeholder="Password" required data-error="Please enter your message subject">
                        <input type="password" name="" id="cmsg_subject" class="form-control" placeholder="Confirm Password" required data-error="Please enter your message subject">
                        <button type="submit" id="submit" class="slide-btn login-btn">Sign up</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <div class="clear"></div>
                        <div class="sign-icon">

                            <div class="acc-not">have an account? <a href="./login">Login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->