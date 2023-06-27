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

</main>

<?php
include('includes/formModal.php');
require('includes/footer.php');

?>