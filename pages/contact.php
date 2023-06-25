<?php

$title = "Your Travelling Partner";

require('includes/header.php');
?>

<main>
    <section id="banner">
        <div class="container-fluid py-2 p-xl-4" style="background-image: url('assets/images/bg.png');">
            <div class="card py-5" style="background-color: rgba(255,255,255,0.3);">
                <p class="text-center mb-2 h-font fs-5 text-success">Connect with us to unlock a world of possibilities.</p>
                <h1 class="text-center h-font text-primary mb-4">Contact Us</h1>
                <!-- <p class="col-md-6 mx-auto text-center fw-bold">Experience the enchantment of Himachal Pradesh through our carefully curated tour packages. Explore majestic landscapes, embrace thrilling adventures, and immerse yourself in the rich culture of this Himalayan gem.</p>
                <p class="text-center m-5"><a href="" class="btn btn-lg btn-primary rounded-pill h-font fs-3">Plan Your Tour Now!</a></p> -->
            </div>
        </div>
    </section>

    <section>
        <div class="card m-3 p-5 shadow">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h-font mb-4">Get in Touch With Us Today!</h2>
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="h-font">Contact Details</h3>
                    <table class="table">
                        <tr>
                            <th><i class="bi bi-telephone-fill"></i> Phone</th>
                            <td>70181-44110</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope-fill"></i> Email</th>
                            <td>info@yourtravellingpartner.com</td>
                        </tr><tr>
                            <th><i class="bi bi-geo-alt-fill"></i> Address</th>
                            <td>Sanjauli, Shimla - 171006 Himachal Pradesh</td>
                        </tr>
                    </table>

                    <h4 class="h-font mt-4">Social Media</h4>
                    <p>We also encourage you to follow us on our social media pages to stay up-to-date on our latest offerings, promotions, and travel tips.</p>
                    <p class="fs-3">Find us on <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-youtube"></i></a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require('includes/footer.php');

?>