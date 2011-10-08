<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function featured_slider_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function featured_slider_imagecache_default_presets() {
  $items = array(
    'slide_img' => array(
      'presetname' => 'slide_img',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '580',
            'height' => '390',
            'upscale' => 0,
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_node_info().
 */
function featured_slider_node_info() {
  $items = array(
    'slide' => array(
      'name' => t('slide'),
      'module' => 'features',
      'description' => t('תוכן לתצוגה בגלריה
נא להכניס או קובץ תמונה עם תיאור, וקישור
או הטמעת יוטויוב - (לא לשכוח לקבוע מידה נכונה בהתאם לגודל המבוקש בשדה ההטמעה)'),
      'has_title' => '1',
      'title_label' => t('כותרת'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function featured_slider_views_api() {
  return array(
    'api' => '2',
  );
}
