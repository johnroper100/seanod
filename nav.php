<?php
$currentSiteTitle = isset($siteTitle) ? $siteTitle : "";
$currentPageId = isset($page["_id"]) ? $page["_id"] : null;
?>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="<?php echo ORIGBASEPATH; ?>" class="probootstrap-logo"><?php echo htmlspecialchars($currentSiteTitle, ENT_QUOTES, 'UTF-8'); ?></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <?php
            echo renderMenu('header', [
                'currentPageID' => $currentPageId,
                'listClass' => 'probootstrap-main-nav',
                'activeItemClass' => 'active'
            ]);
          ?>
        </nav>
    </div>
  </header>
  <!-- END: header -->
