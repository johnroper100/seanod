<?php include 'header.php'; ?>
<div class="probootstrap-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mb40">
                <h2>
                    <?php echo $page["title"]; ?>
                </h2>
                <p>
                    <?php echo $page["content"]["headerSubtitle"]; ?>
                </p>
            </div>
        </div>

        <div class="row probootstrap-gutter16">
            <?php foreach(getPages("newsItems", 0) as $newsItem) { if(isset($newsItem["content"]["featuredImage"])) {?>
                <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                    <?php $imageDetails = getMedia($newsItem["content"]["featuredImage"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>" class="img-bg"
                        style="background-blend-mode: multiply; background: rgba(0, 0, 0, 0.45); background-position: center; background-size: cover; background-image: url('<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>');">
                        <div class="probootstrap-photo-details">
                            <h2><?php echo $newsItem["title"]; ?></h2>
                            <p>Published <?php echo date("F jS, Y", $newsItem["created"]); ?></p>
                        </div>
                    </a>
                </div>
            <?php };}; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>