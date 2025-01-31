<?php include 'header.php'; ?>
<div class="probootstrap-section">
    <div class="container">
        <?php if (isset($page["content"]["featuredImage"]) && $page["content"]["featuredImage"] != "" ) { ?>
        <div class="row probootstrap-gutter16">
            <div class="col-12">
                <?php $imageDetails = getMedia($page["content"]["featuredImage"]); ?>
                <div class="img-bg" style="background-image: url(<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>);"></div>
            </div>
        </div>
        <?php }; ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2><?php echo $page["title"]; ?></h2>
                <p><?php echo $page["content"]["headerSubtitle"]; ?></p>
            </div>
            <div class="col-md-12">
                <?php if (isset($page["content"]["pageContent"])) { echo $page["content"]["pageContent"]; } ?>
            </div>
        </div>
        <div class="row grid" data-masonry='{"percentPosition": true }' style="margin-top: 1.5rem;">
            <?php if (isset($page["content"]["additionalImages"])) { foreach ($page["content"]["additionalImages"] as $imageItem) { ?>
                <div class="col-md-6 grid-item">
                    <?php $imageDetails = getMedia($imageItem["image"]); ?>
                    <p><a href="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" class="image-popup"><img src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" class="img-responsive"></a></p>
                </div>
            <?php } } ?>
        </div>
    </div>
</div>
<script>
    $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
});
</script>
<?php include 'footer.php'; ?>