<!-- Start Slider Area -->
<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="login-form signup-form">
                    <h4 class="login-title text-center">Create an Account</h4>
                    <form id="contactForm" method="POST" action="./login" class="log-form">
                    <input type="text" id="name" class="form-control" placeholder="Full Name" required data-error="Please enter your name"> <input type="email" id="email" class="form-control" placeholder="Your Email" required data-error="Please enter your email">
                        <input type="text" id="name" class="form-control" placeholder="Username" required data-error="Please enter your username">
                        <script>
                                            let name = document.getElementById("name");
                                            name.addEventListener("keyup", (e) => {
                                                let input = e.target.value;
                                                let inputSplit = input.split(" ").join("");
                                                e.target.value = inputSplit;
                                            })
                                        </script>
                                            <input type="text" class="form-control" placeholder="Enter referer id" value="">
                       
                        <input type="password" id="msg_subject" class="form-control" placeholder="Password" required data-error="Please enter your message subject">
                        <input type="password" id="cmsg_subject" class="form-control" placeholder="Confirm Password" required data-error="Please enter your message subject">
                        <div class="check-group">
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Terms & Conditions</label>
                            </div>
                        </div>
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