<?php include 'header.php'; ?>
<section class="probootstrap-section">
    <div class="container">
        <?php if (isset($page["content"]["featuredImage"])) { ?>
        <div class="row">
            <div class="col-md-12">
                <?php $imageDetails = getMedia($page["content"]["featuredImage"]); ?>
                <p><img src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" class="img-responsive"></p>
            </div>
        </div>
        <?php }; ?>
        <div class="row">
            <?php if (isset($page["content"]["secondaryImage"])) { ?>
            <div class="col-12 col-md-5">
                <?php $imageDetails = getMedia($page["content"]["secondaryImage"]); ?>
                <img src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" class="img-responsive">
            </div>
            <?php }; ?>
            <div class="col-5 col-md-7">
                <h2 style="margin-top: 0.5rem;"><?php echo $page["title"]; ?></h2>
                <?php if (isset($page["content"]["pageContent"])) { echo $page["content"]["pageContent"]; }; ?>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<?php include 'footer.php'; ?>