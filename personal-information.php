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
    <title>Home || Artisan Ave</title>

    <?php  include "includes/links.php" ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <?php  include "includes/header.php" ?>

    <!--Info Tabs Start-->

    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body ps-0">
                    <div class="row">
                        <div class="col-xl-3 ps-0">
                            <div class="nav flex-column nav-pills mb-3">
                                <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link active show">Step 1 -
                                    Personal Info</a>
                                <a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link">Step 2 - Business
                                    Info</a>
                                <a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">Step 3 -
                                    Preferences</a>
                                <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">Finish</a>
                            </div>
                        </div>
                        <div class="col-xl-9 content-pdding">
                            <div class="tab-content">
                                <div id="v-pills-home" class="tab-pane fade active show">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Personal Information</h2>
                                        </div>
                                    </div>
                                    <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s.</p>
                                        
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
                                        <div class="col-lg-6 pt-4 px-md-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend cutom-group1">
                                                    <a class="input-group-text"><i
                                                            class="fi fi-rr-id-card-clip-alt"></i></a>
                                                </div>
                                                <input type="text" placeholder="Enter your Full Name"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 pt-4 px-md-0">
                                            <div class="input-group cutom-group1">
                                                <a href="#" class="input-group-text"><i
                                                        class="fi fi-rr-phone-flip"></i></a>
                                                <a href="#" class="input-group-text border-line">+ 1</a>
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <!-- Date & Radio -->
                                        <div class="col-lg-6 px-0 px-md-0">
                                            <div class='input-group date' id='startDate'>
                                                <a href="#" class="input-group-addon input-group-text date-icon"><i
                                                        class="fi fi-rr-cake-birthday"></i></a>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="DD / MM / YYYY" name="startDate" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-md-0">
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
                                            <div class="col-lg-12 pe-0">
                                                <div class="form-outline">
                                                    <textarea class="form-control"
                                                        placeholder="Enter your Skill" id="textAreaExample"
                                                        rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4">Next</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Info Tab -->
                            <div class="tab-content">
                                <div id="v-pills-profile" class="tab-pane fade">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Business Information</h2>
                                        </div>
                                    </div>
                                    <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s.</p>
                                    <!-- bottom line -->
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
                                        <div class="col-lg-6 pt-4 px-md-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend cutom-group1">
                                                    <a class="input-group-text"><i
                                                            class="fi fi-rr-id-card-clip-alt"></i></a>
                                                </div>
                                                <input type="text" placeholder="Enter your Full Name"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 pt-4 px-md-0">
                                            <div class="input-group cutom-group1">
                                                <a href="#" class="input-group-text"><i
                                                        class="fi fi-rr-phone-flip"></i></a>
                                                <a href="#" class="input-group-text border-line">+ 1</a>
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <!-- Date & Radio -->
                                        <div class="col-lg-6 px-0">
                                            <div class='input-group date'>
                                                <a href="#" class="input-group-addon input-group-text date-icon"><i
                                                        class="fi fi-rr-cake-birthday"></i></a>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="Enter your website" name="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 px-md-0">
                                            <div class="input-group cutom-group1">
                                                <a href="#" class="input-group-text"><i class="fi fi-rr-marker"></i></a>
                                                <!-- <a href="#" class="input-group-text border-line">+ 1</a> -->
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <div class="row p-0">
                                            <div class="col-lg-12">
                                                <div class="embed-responsive embed-responsive-100x400px">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35818.719732048536!2d-4.25169!3d55.868392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488815562056ceeb%3A0x71e683b805ef511e!2sGlasgow%2C+Glasgow+City%2C+UK!5e0!3m2!1sen!2sus!4v1448625188752" class="map-emb" width="1155" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4">Next</a>
                                </div>
                            </div>
                            <!-- element end -->
                            <div class="tab-content">
                                <div id="v-pills-messages" class="tab-pane fade">
                                    <div class="d-flex">
                                        <div class="user-radius text-center pt-3">
                                            <i class="fi fi-rr-user"></i>
                                        </div>
                                        <div class="">
                                            <h2>Catergory & Preferences</h2>
                                        </div>
                                    </div>
                                    <p class="pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s.</p>

                                        <!-- Bottom Line -->
                                    <div class="bottom-line"></div>                                    

                                    <div class="row pt-5">

                                        <!--  -->
                                        <div class="col-lg-6 px-0">
                                            <div class='input-group date'>
                                                <a href="#" class="input-group-addon input-group-text date-icon"><i class="fi fi-rr-boxes"></i></a>
                                                <input type='text' class="form-control form-control-2"
                                                    placeholder="Enter your website" name="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-4 px-md-0">
                                            <div class="input-group cutom-group1">
                                                <a href="#" class="input-group-text"><i class="fi fi-rr-boxes"></i></a>
                                                <input type="text" placeholder="Enter your phone number"
                                                    class="form-control form-control-1 form-control-2"
                                                    aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <div class="row p-0 pt-4 category-set">
                                            <h5 class="py-4">Medium</h5>
                                            <div class="col-lg-1 gap-between">
                                                <img src="assets/img/metal.png" alt="">
                                            </div>
                                            <div class="col-lg-1 gap-between">
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
                                            <div class="col-lg-1 pt-xl-4 pt-lg-4 gap-between">
                                                <img src="assets/img/glass.png" alt="">
                                            </div>
                                            <div class="col-lg-1 pt-xl-4 pt-lg-4 gap-between">
                                                <img src="assets/img/textiles.png" alt="">
                                            </div>
                                        </div>
                                        <!-- Shipping Preferences -->
                                        <div class="row p-0 pt-4 category-set">
                                            <h5 class="py-4">Medium</h5>
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

                                    <a href="#" class="btn btn-dark btn-lg button-next ms-auto me-4">Next</a>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Business Info -->
        <div id="v-pills-profile" class="tab-pane fade">

        </div>
        <div id="v-pills-messages" class="tab-pane fade">

        </div>
        <div id="v-pills-settings" class="tab-pane fade">

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>



    <!-- Info Tabs End -->
    <!--Footer Start-->
    <?php  include "includes/footer.php" ?>
    <!--Footer End-->

    <?php  include "includes/var.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Event listener for category selection
            const categoryItems = document.querySelectorAll('.category-item');
            const subcategoryContainer = document.getElementById('subcategoryContainer');

            categoryItems.forEach(function (categoryItem) {
                categoryItem.addEventListener('click', function (event) {
                    event.preventDefault();
                    event
                        .stopPropagation(); // Prevent event propagation to the dropdown container

                    const category = this.innerText.trim();

                    // Load subcategories for the selected category
                    const subcategories = {
                        'Category 1': ['Subc 1.1', 'Subc 1.2', 'Subc 1.3'],
                        'Category 2': ['Subc 2.1', 'Subc 2.2'],
                        'Category 3': ['Subc 3.1', 'Subc 3.2', 'Subc 3.3', 'Subc 3.4']
                    };

                    // Clear existing subcategories
                    subcategoryContainer.innerHTML = '';

                    // Create and append subcategory items for the selected category
                    if (subcategories[category]) {
                        const subcategoryBox = document.createElement('div');
                        subcategoryBox.classList.add('subcategory-box');
                        subcategoryBox.classList.add('d-flex');
                        subcategoryBox.classList.add('flex-wrap');

                        subcategories[category].forEach(function (subcategoryItem) {
                            const subcategoryBoxItem = document.createElement('div');
                            subcategoryBoxItem.classList.add('subcategory-box-item');
                            subcategoryBoxItem.classList.add('me-3');
                            subcategoryBoxItem.classList.add('mb-3');

                            const subcategoryLink = document.createElement('a');
                            subcategoryLink.classList.add('btn');
                            //   subcategoryLink.classList.add('btn-primary');
                            subcategoryLink.innerText = subcategoryItem;

                            subcategoryBoxItem.appendChild(subcategoryLink);
                            subcategoryBox.appendChild(subcategoryBoxItem);
                        });
                        console.log();
                        subcategoryContainer.appendChild(subcategoryBox);
                    }
                });
            });
        });
    </script>


</body>

</html>