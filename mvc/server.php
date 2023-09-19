<?php 
    session_start();

    // Define Database 
    define('_HOST', 'localhost');
    define('_USER', 'root');
    define('_PASS', '');
    define('_DB', 'usego');
    define('_DRIVER', 'mysql');

    // Define link Website root
    if(!empty($_SERVER['HTTPS']))
    {
        $webSiteRoot = 'https://'. $_SERVER['HTTP_HOST'];
    } else {
        $webSiteRoot = 'http://'. $_SERVER['HTTP_HOST'];
    }

    // Set define template 
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $folderPath = trim($scriptName, '/');
    $folderPath = explode('/', $folderPath);
    $folderPathTempalte = $webSiteRoot . '/' . $folderPath[0] . '/mvc/views/cpanel/templates/';
    define('_TEMPLATE', $folderPathTempalte);


    // Auto load folder core
    $fileCores = scandir('./mvc/core');
    $removeValues = array('.', '..');
    $fileCoresRemoveDot = array_diff($fileCores, $removeValues);
    $fileCoresRemoveDot = array_values($fileCoresRemoveDot);
    // Return to original index 
    foreach($fileCoresRemoveDot as $file) 
    {
        if(file_exists(require_once ("./mvc/core/". $file)))
        {
            require_once ("./mvc/core/". $file);
        }
    }

    // Set default time live Vietnamese
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>