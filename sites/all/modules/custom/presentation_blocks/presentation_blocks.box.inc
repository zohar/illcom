<?php

/**
 * Implementation of hook_default_box().
 */
function presentation_blocks_default_box() {
  $export = array();

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'presentation_en';
  $box->plugin_key = 'simple';
  $box->title = '';
  $box->description = 'Presentation text';
  $box->options = array(
    'body' => '<img src="http://illustrationdot.com/sites/illustrationdot.com/files/photomaton-isa.jpg" alt="Isa" alt="Isa as a child" style="padding-bottom:2em;"/>
<p>Binyamina, Israel</p>
Welcome to my site! You will find here cows and turtles, tigers and bunnies that look like fluffy animals, dazed birds, various patterns, girls who\'s name is Noame, sheepish cats and pieces of landscape ready to welcome in the future people who remain to be invented.',
    'format' => '1',
  );
  $export['presentation_en'] = $box;

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'presentation_fr';
  $box->plugin_key = 'simple';
  $box->title = '';
  $box->description = 'Presentation text fr';
  $box->options = array(
    'body' => '<img src="http://illustrationdot.com/sites/illustrationdot.com/files/photomaton-isa.jpg" alt="Isa" alt="Isa as a child" style="padding-bottom:2em;"/>
<p>Binyamina, Israel</p>
Bienvenue sur mon site! Vous trouverez ici des vaches et des tortues, des tigres et des lapins aux allures de peluches, des oiseaux hébétés, des motifs à répétition, des petites filles qui s\'appellent Noame, des chats penauds et des bouts de paysages prêts à accueillir des personnages qui restent à inventer.',
    'format' => '1',
  );
  $export['presentation_fr'] = $box;

  return $export;
}
