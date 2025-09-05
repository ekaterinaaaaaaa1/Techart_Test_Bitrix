<?php
$arUrlRewrite=array (
  11 => 
  array (
    'CONDITION' => '#^/news/(\d+)/$#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => NULL,
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/theme-(\d+)/page-(\d+/)#',
    'RULE' => 'PAGEN_2=$2&THEME_ID=$1',
    'ID' => NULL,
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/techart/contacts/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/techart/contacts.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/news/page-(\d+/)#',
    'RULE' => 'PAGEN_1=$1',
    'ID' => NULL,
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/techart#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/techart/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
