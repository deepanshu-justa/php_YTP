<?php
$title = "Admin Login";

require('includes/header.php');
?>

<div class="container-fluid d-flex align-items-center justify-content-center" style="height:100vh;">
    <div class="card col-md-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="user" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
