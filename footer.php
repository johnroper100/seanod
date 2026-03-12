<?php
$currentSiteTitle = isset($siteTitle) ? $siteTitle : "";
$currentFooterText = isset($footerText) ? $footerText : "";
$currentCopyrightText = isset($copyrightText) ? $copyrightText : "";
$renderedFooterText = renderSiteTextTemplate($currentFooterText, ['siteTitle' => $currentSiteTitle]);
$renderedCopyrightText = renderSiteTextTemplate($currentCopyrightText, ['siteTitle' => $currentSiteTitle]);
?>

<footer class="probootstrap-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($renderedFooterText !== "") { ?>
                    <p class="mb-1"><?php echo nl2br(htmlspecialchars($renderedFooterText, ENT_QUOTES, 'UTF-8')); ?></p>
                <?php } ?>
                <?php if ($renderedCopyrightText !== "") { ?>
                    <p class="probootstrap-copyright">&copy; <?php echo nl2br(htmlspecialchars($renderedCopyrightText, ENT_QUOTES, 'UTF-8')); ?></p>
                <?php } ?>
                <?php
                    echo renderMenu('header', [
                        'listClass' => 'probootstrap-main-nav',
                        'listAttributes' => [
                            'style' => 'float: right;'
                        ],
                        'linkAttributes' => [
                            'style' => 'color: #5068A9;'
                        ]
                    ]);
                ?>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>


<script src="<?php echo THEMEPATH; ?>/js/scripts.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/js/main.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/js/custom.js"></script>

</body>

</html>
