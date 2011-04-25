<?php
/**
 * Choose a random header image
 */
function simplicity_rotating_header($single = 'single') {
  $dir = file_directory_path() . '/header_banners';
  $mask = '^.*\.jpg$';
  $banners = file_scan_directory($dir, $mask);
  if (count($banners)) {
    if ($single == 'single') {
      $banner = array_rand($banners);
      //dsm ('single banner: '. base_path() . $banners[$banner]->filename);
      $list[] = base_path() . $banners[$banner]->filename;
    }
    else if (!$single) {
      foreach ($banners as $banner) {
        $list[] = base_path() . $banner->filename;
      }
      //dsm('non single: ');
      //dsm($list);
    }
    return $list;
  }
  return FALSE;
}

