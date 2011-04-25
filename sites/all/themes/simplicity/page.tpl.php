<?php // $Id$ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
	<div id="wrapper">
			<?php if($site_name):?>
        <a href="<?php print $base_path ?>">
          <h1 title="<?php print $site_name?>" class="site-name" style="background-image:url(<?php $banner = simplicity_rotating_header(); print $banner[0]; ?>)">
            <?php print $site_name?>
            <?php if($site_slogan){?><span class="site-slogan"><?php print $site_slogan?></span><?php } ?>
          </h1>
        </a>
     <?php endif; ?>
	    <div id="tools_box">
        <?php if ($header): print $header; endif; ?>
        <?php if ($breadcrumb): print $breadcrumb; endif; ?>
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
        <?php if ($tabs): print $tabs .'</div>'; endif; ?>
        <?php if (isset($tabs2)): print $tabs2; endif; ?>
        <?php if ($help): print $help; endif; ?>
        <?php if ($messages): print $messages; endif; ?>
      </div>

	  	<div id="content">
			  <?php if ($title): print '<h1>'. $title .'</h1>'; endif; ?>
			  <?php print $content ?>
        <span class="clear"></span>
        <?php print $feed_icons ?>
	  	</div>
	  <!-- end #content-->

		<div id="sidebar_right">
		  <?php/* if (isset($primary_links)) : ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
      <?php endif; ?>
      <?php if (isset($secondary_links)) : ?>
        <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
      <?php endif; */?>
      <?php print $right; ?>
		</div><!-- end #menu-->

		<div class="clear-block"></div>

		<div align="center" id="footer">
     <?php print $footer ?>
     <?php print $footer_message ?>
     <p>This is a <a href="http://drupal.org">Drupal</a> port of the <a href="http://www.oswd.org/design/preview/id/3590">GGGDesign-Simplicity OSWD</a> Theme, by <a href="http://linnovate.net">Linnovate</a></p>
    </div>
	</div>
	<!-- end #wrapper-->
  <?php print $closure ?>
</body>
</html>
