<?php
use Model;
/**
 * 统一入口文件
 */

define('BASEDIR', __DIR__);

include BASEDIR.'/Model/Loader.php';

spl_autoload_register('\\Model\\Loader::autoload');

Model\User::test();

Controller\My\Index::test();