<?php
$currentSiteTitle = isset($siteTitle) ? $siteTitle : "";
?>

<footer class="probootstrap-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="probootstrap-copyright">&copy; <?php echo date("Y"); ?> <?php echo $currentSiteTitle; ?> - All Rights Reserved.</p>
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
