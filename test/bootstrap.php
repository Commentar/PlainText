<?php
/**
 * Bootstrap the tests
 *
 * PHP version 5.4
 *
 * @category   CommentarTest
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2012 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace CommentarTest;

date_default_timezone_set('Europe/Amsterdam');

session_start();

/**
 * Simple SPL autoloader for the CommentarTest libraries
 *
 * @param string $class The class name to load
 *
 * @return void
 */
spl_autoload_register(function ($class) {
    $nslen = strlen(__NAMESPACE__);
    if (substr($class, 0, $nslen) != __NAMESPACE__) {
        return;
    }
    $path = substr(str_replace('\\', '/', $class), $nslen);
    $path = __DIR__ . $path . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

/**
 * Simple SPL autoloader for the CommentarTest libraries
 *
 * @param string $class The class name to load
 *
 * @return void
 */
spl_autoload_register(function ($class) {
    $nslen = strlen('Commentar');
    if (substr($class, 0, $nslen) != 'Commentar') {
        return;
    }
    $path = str_replace('\\', '/', $class);
    $path = __DIR__ . '/../src/' . $path . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

/**
 * Simple SPL autoloader for the CommentarTest libraries
 *
 * @param string $class The class name to load
 *
 * @return void
 */
spl_autoload_register(function ($class) {
    $nslen = strlen('Commentar');
    if (substr($class, 0, $nslen) != 'Commentar') {
        return;
    }
    $path = substr(str_replace('\\', '/', $class), $nslen);
    $path = __DIR__ . '/Mocks' . $path . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
