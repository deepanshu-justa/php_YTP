<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 h-font" id="staticBackdropLabel">Get Free Quote!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">Your privacy is important to us - no spam messages or emails.</p>
                <form action="actions/queryFormSubmit.php" method="post">
                    <div class="form-floating mb-3 d-none">
                        <input type="text" class="form-control" id="hp" name="hp" placeholder="name@example.com">
                        <label for="hp">HP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pck_name" name="pck_name" placeholder="name@example.com">
                        <label for="pck_name">Package Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Password">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Password">
                        <label for="email">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="comments" name="comments" style="height: 100px"></textarea>
                        <label for="comments">Comments</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>