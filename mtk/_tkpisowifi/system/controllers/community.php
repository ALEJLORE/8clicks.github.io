<?php
/**
* TKHOTSPOT
**/
_admin();
$ui->assign('_title', 'Community');
$ui->assign('_system_menu', 'community');

$action = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

$ui->display('community.tpl');