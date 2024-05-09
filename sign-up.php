<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>Sign Up || Artisan Ave</title>

    <?php  include "includes/links.php" ?>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <?php  include "includes/header.php" ?>

     <!--Info Tabs Start-->
     <!--Info Tabs Start-->
    <section class="login-height">
        <div class="container paddng-top">
            <div class="row">
                <div class="col-lg-6 paddng-img">
                    <img src="assets/img/sign-up-img.png" alt="">
                </div>
                <div class="col-lg-6 pdding-form">
                    <div class="card p-3 pt-4">
                        <div class="card-title heading ps-3">
                            <h4>Signup</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text field-bg" id="basic-addon1">
                                    <a href="#"><i class="fi fi-rr-id-card-clip-alt"></i></a>
                                </span>
                                <input type="text" class="form-control mb-0 field-padding"
                                    placeholder="Enter your username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text field-bg" id="basic-addon1">
                                    <a href="#"><i class="fi fi-rr-envelope"></i></a>
                                </span>
                                <input type="text" class="form-control mb-0 field-padding"
                                    placeholder="Enter your Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text field-bg" id="basic-addon1">
                                    <a class=""><i class="fi fi-rr-lock"></i></a>
                                </span>
                                <input type="text" class="form-control mb-0 field-padding"
                                    placeholder="Enter your Password" aria-label="Password"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text field-bg" id="basic-addon1">
                                    <a class=""><i class="fi fi-rr-lock"></i></a>
                                </span>
                                <input type="text" class="form-control mb-0 field-padding"
                                    placeholder="Confirm you Password" aria-label="Password"
                                    aria-describedby="basic-addon1">
                            </div>

                            <!-- Radio -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                    value="option3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>

                            <div>
                                <a href="#" class="btn btn-primary login-btn">Signup</a>
                            </div>
                            <div class="card-footer bg-transparent d-flex justify-content-center pt-4 bg-color">
                                <!-- <div class="forgot-btn">
                                    <a href="#" class="">Forgot Password?</a>
                                </div> -->
                                <div class="forgot-btn">
                                    <a href="login.php" class="">Already member? <span class="color ">Login</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arc-line">
                <img src="assets/img/arc-line.png" alt="">
            </div>
        </div>
    </section>

     <!-- mail cta start -->
     <section class="bg-mail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mail-heading text-center">
                        <h2>Stay <span class="updated-text">Updated</span></h2>
                        <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been<span class="d-block"></span> the industry's standard dummy text ever since
                            the 1500s.</p>
                    </div>
                    <div class="search-new pt-3">
                        <div class="input-group custom-input-group">
                            <input type="text" class="form-control" placeholder="Enter Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fi fi-rr-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mail cta end -->




    <!--Footer Start-->
    <?php  include "includes/footer.php" ?>
    <!--Footer End-->

    <?php  include "includes/var.php" ?>



</body>

</html>