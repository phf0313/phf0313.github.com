<?php
/**
 * 首页
 */

define('BROOT',dirname(__FILE__));

define('BLIB',BROOT.'/Lib');

include BLIB.'/core.php';


$ac=isset($_GET['ac'])?htmlspecialchars($_GET['ac']):'blog';

$mod=isset($_GET['mod'])?htmlspecialchars($_GET['mod']):'index';

$actionname=getActionName($ac);
$Action=new $actionname();

$Action->$mod();

