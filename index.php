<?php
use Model;
/**
 * ͳһ����ļ�
 */

define('BASEDIR', __DIR__);

include BASEDIR.'/Model/Loader.php';

spl_autoload_register('\\Model\\Loader::autoload');

Model\User::test();

Controller\My\Index::test();