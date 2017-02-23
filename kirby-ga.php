<?php
require_once __DIR__ . DS . 'lib' . DS . 'ga.php';

$kirby->set('snippet', c::get('plugin.ga.snippet', 'ga'), __DIR__ . DS . 'registry' . DS . 'snippet.php');