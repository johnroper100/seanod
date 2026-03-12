<?php
$currentSiteTitle = isset($siteTitle) ? $siteTitle : "";
$currentPageId = isset($page["_id"]) ? $page["_id"] : null;
?>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="<?php echo ORIGBASEPATH; ?>" class="probootstrap-logo"><?php echo $currentSiteTitle; ?></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <?php
                $menuItems = getMenuItems('header');
                foreach ($menuItems as $menuItem) {
            ?>
            <li <?php if ($currentPageId !== null && $menuItem['type'] == 0 && $menuItem['page'] == $currentPageId) { ?>class="active"<?php }; ?>><a href="<?php echo BASEPATH . '/' . $menuItem['link']; ?>" <?php if ($menuItem['type'] == 1) { ?>target="_blank"<?php } ?>><?php echo $menuItem['name']; ?></a></li>
            <?php }; ?>
          </ul>
        </nav>
    </div>
  </header>
  <!-- END: header -->
