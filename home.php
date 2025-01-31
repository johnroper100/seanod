<?php include 'header.php'; ?>
<div class="probootstrap-section" style="padding-bottom: 1em;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 mb40">
                <h2>
                    <?php echo $page["content"]["headerTitle"]; ?>
                </h2>
                <p>
                    <?php echo $page["content"]["headerSubtitle"]; ?>
                </p>
            </div>
        </div>

        <div class="row probootstrap-gutter16">
            <?php foreach(getPages("newsItems", 1) as $newsItem) { if (isset($newsItem["content"]["featuredImage"])) { ?>
                <div class="col-md-8 probootstrap-animate" data-animate-effect="fadeIn">
                    <?php $imageDetails = getMedia($newsItem["content"]["featuredImage"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>" class="img-bg"
                        style="background-blend-mode: multiply; background: rgba(0, 0, 0, 0.45); background-size: cover; background-position: center; background-image: url('<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>');">
                        <div class="probootstrap-photo-details">
                            <h2>Latest News:</h2>
                            <p><?php echo $newsItem["title"]; ?></p>
                        </div>
                    </a>
                </div>
            <?php }; }; ?>
            <?php foreach(getPages("portfolioItems", 0) as $portfolioItem) { if (isset($portfolioItem["content"]["featuredImage"])) { ?>
                <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                    <?php $imageDetails = getMedia($portfolioItem["content"]["featuredImage"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $portfolioItem["collectionSubpath"] . '/' . $portfolioItem["path"]; ?>" class="img-bg"
                        style="background-blend-mode: multiply; background: rgba(0, 0, 0, 0.45); background-size: cover; background-position: center; background-image: url('<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>');">
                        <div class="probootstrap-photo-details">
                            <h2><?php echo $portfolioItem["title"]; ?></h2>
                            <p><?php echo $portfolioItem["content"]["headerSubtitle"]; ?></p>
                        </div>
                    </a>
                </div>
            <?php }; }; ?>
        </div>
        <div class="row mb-3">
            <?php if (isset($page["content"]["associateImages"])) { foreach($page["content"]["associateImages"] as $assocItem) { ?>
                <div class="col-12 col-md-3">
                    <?php $imageDetails = getMedia($assocItem["image"]); ?>
                    <a class="img-bg" href="<?php echo $assocItem["link"]; ?>" target="_blank" style="background-size: contain; max-width: 60%; margin: 0 auto; background-image: url('<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>');"></a>
                </div>
            <?php }; }; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>