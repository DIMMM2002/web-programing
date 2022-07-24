<?php

    $connect = mysqli_connect('localhost', 'shop_user', '12345', 'shop');

    if (!$connect) {
        die('Error connect to DataBase');
    }