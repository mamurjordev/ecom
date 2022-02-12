<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>
<section class="login_part 
        <div class="slider-area ">
            <div class="single-slider slider-height1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h1 class="p-5">Create An New Account</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Already have an account</h2>
                                <p>There are advances being made in science and technology
                                    everyday, and a good example of this is the</p>
                                <a href="login.php" class="btn_3">Login your account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign up now</h3>
                                <form class="row contact_form" action="auth_process.php" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Name" required>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="phone" value=""
                                            placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="name" name="email" value=""
                                            placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <input type="submit" name="register" value="Create an account" class="btn_3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php require_once 'frontend/partials/footer.php'; ?>