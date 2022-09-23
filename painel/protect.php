<?php

if(!isset($_SESSION)){
    @session_start();
}

if(!isset($_SESSION['id'])){
    echo "<script> window.location.href='../index.php' </script>";
}