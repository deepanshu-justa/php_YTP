<?php

$title = "Your Travelling Partner";

require('includes/header.php');

// Read the JSON file contents
$jsonData = file_get_contents('assets/json/packages.json');

// Parse the JSON data into an associative array
$data = json_decode($jsonData, true);

// Access the packages array
$packages = $data['packages'];
?>

<main>
    <section id="banner">
        <div class="container-fluid py-2 p-xl-4" style="background-image: url('assets/images/bg.png');">
            <div class="card py-5" style="background-color: rgba(255,255,255,0.3);">
                <h1 class="text-center h-font text-primary">Himachal Tour Packages</h1>
                <h2 class="text-center mb-2 h-font fs-5 text-success mb-4">by Your Travelling Partner</h2>
                <p class="col-md-6 mx-auto text-center fw-bold">Experience the enchantment of Himachal Pradesh through our carefully curated tour packages. Explore majestic landscapes, embrace thrilling adventures, and immerse yourself in the rich culture of this Himalayan gem.</p>
                <p class="text-center m-5"><a href="" class="btn btn-lg btn-primary rounded-pill h-font fs-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="resetPckName()">Plan Your Tour Now!</a></p>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container my-5">
            <div class="card shadow-lg">
                <div class="row g-0">
                    <div class="col-sm-6 mx-auto col-xl-5 order-2 order-xl-1">
                        <img src="assets/images/Collage.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xl-7 order-1 order-xl-2">
                        <div class="card-body">
                            <h2 class="h1 h-font text-center text-xl-start">Welcome to <span class="text-primary">YTP Family</span></h2>
                            <p class="card-text">YTP Family is not just a travel agency; it is a community of passionate adventurers, explorers, and dreamers. We believe that travel has the power to transform lives, create lasting memories, and connect people from all walks of life.</p>
                            <p class="card-text">With our team of knowledgeable experts, we curate exclusive itineraries that showcase the tranquility of pristine mountain landscapes, the thrill of exhilarating outdoor adventures, and the immersive cultural experiences found in the vibrant destinations of Himachal Pradesh.</p>
                            <p class="card-text">Join our vibrant community and embark on a journey of discovery, where every destination becomes a cherished memory. At YTP Family, we are more than a travel agency – we are your companions, your guides, and your family on the road less traveled. Let's explore the world together and create extraordinary experiences that will stay with you for a lifetime. Welcome to the YTP Family!</p>
                            <p class="text-center mt-5"><a href="/contact" class="btn btn-lg btn-outline-success m-2">Get In Touch</a><a href="" class="btn btn-lg btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="resetPckName()">Plan a Tour</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packages">
        <div class="container my-5">
            <p class="h3 h-font text-center text-success">Top Picks</p>
            <h2 class="h1 h-font text-center mb-3">Best Selling <span class="text-primary">Packages</span></h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <?php foreach ($packages as $package) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/<?=$package['photo']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="h4 card-title text-center h-font text-primary"><?= $package['name'] ?> <sub class="text-success"><?=$package['duration']?></sub></h3>
                                <p class="h3 card-text d-flex justify-content-around"><i class="bi bi-building" title="Accommodation"></i><i class="bi bi-cup-hot"></i><i class="bi bi-taxi-front"></i><i class="bi bi-camera"></i><i class="bi bi-emoji-laughing"></i></p>
                                <p class="card-text h-font fs-3 mb-0"><strong>&#8377; <?=$package['cost']?>/-</strong></p>
                                <p class="card-text"><strong>Highlights</strong> Shimla, Kufri, Kullu, Manali</p>
                                <!-- <p class="h2 card-text text-success h-font">&#8377; 2,000/-</p> -->
                                <p class="my-3">
                                    <a href="" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="updatePckName('<?=$package['name']?>')">Get Free Quote</a>
                                    <a href="https://wa.me/+917018144110" target="_blank" class="btn btn-success btn-lg"><i class="bi bi-whatsapp"></i></a>
                                    <a href="tel:+917018144110" class="btn btn-primary btn-lg"><i class="bi bi-telephone-fill"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section id="destinations">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-5 d-lg-flex align-items-center">
                    <div class="">
                        <p class="h3 h-font text-success text-center">Himachal Pradesh</p>
                        <h2 class="h1 h-font text-center mb-4">Popular <span class="text-primary">Destinations</span></h2>
                        <p class="d-none d-sm-block">Himachal Pradesh, a haven nestled in the lap of the Himalayas, is home to a collection of popular destinations that leave visitors spellbound. From the charming colonial allure of Shimla to the adventurous allure of Manali, each place offers a unique blend of natural beauty, cultural richness, and thrilling experiences. Whether you're exploring the bustling streets of Shimla or indulging in adrenaline-pumping activities in Manali, Himachal Pradesh promises an unforgettable journey filled with breathtaking landscapes and warm hospitality. Get ready to embark on a remarkable adventure and create lasting memories in this picturesque region of India.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Shimla.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Shimla</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Manali.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Manali</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Spiti.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Spiti</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Dharamshala.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Dharamshala</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Dalhousie.jpg" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Dalhousie</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/Kinnaur.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center h-font">Kinnaur</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
        <div class="card shadow-lg">
                <div class="row g-0">
                    <div class="col-sm-6 mx-auto col-xl-5 order-2 order-xl-1">
                        <img src="assets/images/MountainGalaxy.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-xl-7 order-1 order-xl-2">
                        <div class="card-body">
                            <p class="h4 h-font text-center">Comfort and Luxury Await at <span class="text-success">Our Manali Hotel</span></p>
                            <h2 class="h1 h-font text-center text-primary">Mountain Galaxy</h2>
                            <p class="h4 h-font text-center text-warning mb-4"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></p>
                            <p class="card-text text-center">Stay in comfort and luxury at our exquisite hotel in Manali. Nestled amidst the breathtaking beauty of the Himalayas, our hotel offers a tranquil retreat with well-appointed rooms, stunning views, and warm hospitality. Experience the perfect blend of modern amenities and the serene charm of nature during your stay with us.</p>
                            <p class="text-center mt-5"><a href="https://www.mountaingalaxy.in/" target="_blank" class="btn btn-lg btn-outline-success rounded-pill">Hotel Website</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include('includes/formModal.php');
require('includes/footer.php');

?>