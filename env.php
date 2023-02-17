<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17312";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/web17312/bai6_base_mvc/";

function url($url)
{
    return BASE_URL . $url;
}
function redirect($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header("location:" . url($route) . "?msg=" . $key);
    die;
}
