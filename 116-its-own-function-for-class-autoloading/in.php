<?php
spl_autoload_register(function ($class) {
    $page = substr_replace(strrchr($class, '\\'), '', 0, 1);
    $ds = DIRECTORY_SEPARATOR;

    $filename = 'classes' . $ds . $page . '.php';
    require($filename);
});

// $adm = new Core\Conrtoller\Admin;

// echo $adm;

// $us = new Core\Project\User;

// echo $us;

// $con = new Core\Controller;

// echo $con;

// $pag = new Project\User\Page;

// echo $pag;