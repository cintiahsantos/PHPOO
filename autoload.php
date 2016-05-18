<?php
/**
 * Created by PhpStorm.
 * User: cintia.santos
 * Date: 17/05/2016
 * Time: 10:41
 */
define ('CLASS_DIR', __DIR__ . '/src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();