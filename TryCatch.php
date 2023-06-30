<?php
// try {
//     // init bootstrapping phase 
//     $config_file_path = "Config.php";
//     if (!file_exists($config_file_path)) {
//         throw new Exception("Configuration file not found.");
//     }

//     // continue execution of the bootstrapping phase 
// } catch (Exception $err) {
//     echo $err->getMessage();
//     die();
// }

// try {
//     $str = 'halo';
//     throw new Exception();
// } catch (Exception) {
//     var_dump($str);
// } finally {
//     var_dump($str);
// }

function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 bellow");
    }
    return true;
}
try {
    checkNum(2);
    echo 'if you see this, the number is or bellow';
} catch (Exception $e) {
    echo 'Message :' . $e->getMessage();
}
