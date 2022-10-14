<?php include 'header.php'; ?>
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mb80 text-center probootstrap-animate">
                <h2><?php echo $page["title"]; ?></h2>
                <p><?php echo $page["content"]["headerSubtitle"]; ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
                if (isset($_GET['error'])) {
                    $isError = (bool)$_GET['error'];
                } else {
                    $isError = false;
                }
                
                if (isset($_GET['success'])) {
                    $isSuccess = (bool)$_GET['success'];
                } else {
                    $isSuccess = false;
                }
            if ($isError) { ?>
                <div class="alert alert-danger" role="alert">Form could not be submitted. Please try again.</div>
            <?php }
            if ($isSuccess) { ?>
                <div class="alert alert-success" role="alert">Form submitted successfully. We will be in touch soon.</div>
            <?php } ?>
            <div class="col-md-12 probootstrap-animate">
                <form action="<?php echo BASEPATH; ?>/form/contact" method="post" class="probootstrap-form mb60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="math">What does 1 + 4 equal?</label>
                        <input type="math" class="form-control" id="math" name="math">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<?php include 'footer.php'; ?>
