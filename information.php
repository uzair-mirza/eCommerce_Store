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
    <title>Personal Information || Artisan Ave</title>

    <?php  include "includes/links.php" ?>

    <style>
        .progress-tabs {
            padding: 20px;
            border-left: none !important;
            border: 2px solid rgba(93, 106, 100, 0.30);
        }

        /*Background color*/
        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            /* text-align: center; */
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            /* background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative; */
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        /* #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        } */

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
            cursor: pointer;
        }

        #progressbar .active {
            color: #5D6A64;
            font-family: Montserrat;
            font-size: 22px;
            font-style: italic;
            font-weight: 500;
            line-height: normal;
            letter-spacing: -1.12px;
        }

        #progressbar li {
            /* text-align: center; */
            list-style-type: none;
            position: relative;
            color: rgba(93, 106, 100, 0.63);
            font-family: Montserrat;
            font-size: 22px;
            font-style: italic;
            font-weight: 500;
            line-height: normal;
            letter-spacing: -0.88px;
            border-bottom: 1px solid rgba(93, 106, 100, 0.30);
            padding: 20px;
        }

        /*Icons in the ProgressBar*/
        /* #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        } */

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        /* #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        } */

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        .complete-text p {
            color: rgba(93, 106, 100, 0.63);
            font-family: Montserrat;
            font-size: 22px;
            font-style: italic;
            font-weight: 500;
            line-height: normal;
            letter-spacing: -0.88px;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(93, 106, 100, 0.30);
            padding: 20px;
        }

        .test {
            margin-bottom: 0px;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <?php  include "includes/header.php" ?>


    <!-- new tabs -->
    <section class="padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="progress-tabs">
                        <div class="complete-text">
                            <p>Complete Profile</p>
                        </div>
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <!-- <li>Complete Profile</li> -->
                            <li class="active" id="account">Step 1 - Personal Info</li>
                            <li id="personal">Step 2 - Business Info</li>
                            <li id="payment">Step 3 - Preferences</li>
                            <li id="confirm">Finish</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div>
                        <form id="msform">
                            <!-- Personal Information -->
                            <fieldset>
                                <div id="v-pills-home" class="tab-pane tab-pane-1 fade active show">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Personal Information</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text
                                            ever since the 1500s.</p>
                                    </div>

                                    <div class="bottom-line"></div>

                                    <div class="d-flex pt-4">
                                        <div class="upload-box">
                                            <i class="fi fi-rr-mode-portrait"></i>
                                        </div>
                                        <div class="anchor-color">
                                            <a href="#">+ Upload Image</a>
                                            <p>Icon size should be 500 x 480 and file size is less than 2mb.</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="row">
                                        <div class="col-lg-6 pt-4 px-md-0 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend cutom-group1">
                                                    <span class="input-group-text input-group-text-5"><i
                                                            class="fi fi-rr-id-card-clip-alt"></i></span>
                                                </div>
                                                <input type="text" placeholder="Enter your Full Name"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 pt-4 px-md-0 mb-3">
                                            <div class="input-group cutom-group1">
                                                <span class="input-group-text input-group-text-5"><i
                                                        class="fi fi-rr-phone-flip"></i></span>
                                                <a class="input-group-text border-line input-group-text-5">+ 1</a>
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <!-- Date & Radio -->
                                        <div class="col-lg-6 px-0 px-md-0 mb-3">
                                            <div class='input-group date' id='startDate'>
                                                <span
                                                    class="input-group-addon input-group-text input-group-text-5 date-icon"><i
                                                        class="fi fi-rr-cake-birthday"></i></span>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="DD / MM / YYYY" name="startDate" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-md-0 mb-3">
                                            <div class="container">
                                                <div class="radio_container">
                                                    <input type="radio" class="" name="radio" id="one" checked>
                                                    <label for="one">Male</label>
                                                    <input type="radio" name="radio" id="two">
                                                    <label for="two">Female</label>
                                                    <input type="radio" name="radio" id="three">
                                                    <label for="three">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-0">
                                            <div class="col-lg-12 pe-0 mb-3">
                                                <div class="form-outline">
                                                    <textarea class="form-control form-focus"
                                                        placeholder="Enter your Skill" id="textAreaExample"
                                                        rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4">Next</a>
                                    </div>
                                </div>
                                <!-- <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2>
                                    <input type="email" name="email" placeholder="Email Id" />
                                    <input type="text" name="uname" placeholder="UserName" />
                                    <input type="password" name="pwd" placeholder="Password" />
                                    <input type="password" name="cpwd" placeholder="Confirm Password" />
                                </div> -->
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            <fieldset>
                                <!-- <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" placeholder="First Name" />
                                    <input type="text" name="lname" placeholder="Last Name" />
                                    <input type="text" name="phno" placeholder="Contact No." />
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" /> -->

                                <!-- Business Info Tab -->
                                <div id="v-pills-profile" class="tab-pane tab-pane-1 fade show">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Business Information</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text
                                            ever since the 1500s.</p>
                                    </div>
                                    <!-- bottom line -->
                                    <div class="bottom-line"></div>

                                    <div class="d-flex pt-4">
                                        <div class="upload-box">
                                            <i class="fi fi-rr-mode-portrait"></i>
                                        </div>
                                        <div class="anchor-color">
                                            <a href="#">+ Upload Icon</a>
                                            <p>Icon size should be 500 x 480 and file size is less than 2mb.</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="row">
                                        <div class="col-lg-6 pt-4 px-md-0 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend cutom-group1">
                                                    <span class="input-group-text input-group-text-5"><i
                                                            class="fi fi-rr-shop"></i></span>
                                                </div>
                                                <input type="text" placeholder="Enter your Business Name"
                                                    class="form-control form-control-1 form-control-2" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 pt-4 px-md-0 mb-3">
                                            <div class="input-group cutom-group1">
                                                <span class="input-group-text input-group-text-5"><i
                                                        class="fi fi-rr-phone-office"></i></span>
                                                <a href="#" class="input-group-text border-line input-group-text-5">+
                                                    1</a>
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)" />
                                            </div>
                                        </div>
                                        <!-- Date & Radio -->
                                        <div class="col-lg-6 px-0 mb-3">
                                            <div class='input-group date'>
                                                <span
                                                    class="input-group-addon input-group-text input-group-text-5 date-icon"><i
                                                        class="fi fi-rr-globe"></i></span>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="Enter your website" name="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 px-md-0 mb-3">
                                            <div class="input-group cutom-group1">
                                                <a href="#" class="input-group-text input-group-text-5"><i
                                                        class="fi fi-rr-marker"></i></a>
                                                <!-- <a href="#" class="input-group-text border-line">+ 1</a> -->
                                                <input type="text" placeholder="Enter Busines Address"
                                                    class="form-control form-control-1 form-control-2" />
                                            </div>
                                        </div>
                                        <div class="row p-0">
                                            <div class="col-lg-12 mb-3">
                                                <div class="embed-responsive embed-responsive-100x400px">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35818.719732048536!2d-4.25169!3d55.868392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488815562056ceeb%3A0x71e683b805ef511e!2sGlasgow%2C+Glasgow+City%2C+UK!5e0!3m2!1sen!2sus!4v1448625188752"
                                                        class="map-emb" width="1155" height="250" frameborder="0"
                                                        style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4">Next</a>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            <fieldset>

                                <!-- Preferencess -->
                                <!-- <div class="tab-content"> -->
                                <div id="v-pills-messages" class="tab-pane tab-pane-1 fade show">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Catergory & Preferences</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text
                                            ever since the 1500s.</p>
                                    </div>

                                    <!-- Bottom Line -->
                                    <div class="bottom-line"></div>

                                    <div class="row pt-5">

                                        <!--  -->
                                        <!-- <div class="col-lg-6 px-0">
                                            <div class='input-group date'>
                                                <a href="#"
                                                    class="input-group-addon input-group-text input-group-text-5 date-icon"><i
                                                        class="fi fi-rr-boxes"></i></a>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="Choose Category" name="" />
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 px-0">
                                            <div class='input-group date'>
                                                <a href="#"
                                                    class="input-group-addon input-group-text input-group-text-5 date-icon"><i
                                                        class="fi fi-rr-boxes"></i></a>
                                                <select class="form-control form-control-2" name="category">
                                                    <option value="">Choose Category</option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 ps-lg-4 px-md-0">
                                        <div class='input-group date'>
                                                <a href="#"
                                                    class="input-group-addon input-group-text input-group-text-5 date-icon"><i
                                                        class="fi fi-rr-boxes"></i></a>
                                                <select class="form-control form-control-2" name="category">
                                                    <option value="">Choose Category</option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row p-0 pt-4 category-set">
                                            <h5 class="py-4">Medium</h5>
                                            <div class="col-lg-1  gap-between">
                                                <img src="assets/img/metal.png" alt="">
                                            </div>
                                            <div class="col-lg-1  gap-between">
                                                <img src="assets/img/mixed-media.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/precious-stone-&-metal.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/resin.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/wax.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/clay.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/wood.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/botanicals.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/paint-&-pencils.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/Film-&-Digital-Media.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/glass.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/textiles.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Shipping Preferences -->
                                    <div class="row p-0 pt-4 category-set">
                                        <h5 class="py-4">Shipping Preferences</h5>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/wholesale.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Custom-Orders.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Free-Shipping.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Porch-Pickup.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Rush-Orders.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Local-Delivery.png" alt="">
                                        </div>
                                    </div>
                                    <!-- Diversity -->
                                    <div class="row p-0 pt-4 category-set">
                                        <h5 class="py-4">Diversity</h5>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Woman-Owned.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Minority-Owned.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Charitable-Donor.png" alt="">
                                        </div>
                                        <div class="col-lg-1 gap-between">
                                            <img src="assets/img/Veteran-Owned.png" alt="">
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4 mt-3">Next</a>
                                </div>

                                <!-- <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img
                                                src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px">
                                        </div>
                                        <div class='radio' data-value="paypal"><img
                                                src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px">
                                        </div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder="" />
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- new tabs end -->



    <!-- Info Tabs End -->
    <!--Footer Start-->
    <?php  include "includes/footer.php" ?>
    <!--Footer End-->

    <?php  include "includes/var.php" ?>

    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>


</body>

</html>