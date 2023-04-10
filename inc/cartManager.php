<?php

session_start();

// Don't initialize SESSION cart if it already exists
if (!isset($_SESSION['cart']) || (isset($_GET['empty']) && $_GET['empty'] === 'true')) {
    $_SESSION['cart'] = array();
}

// Add the GET id to SESSION cart
if (isset($_GET['add_to_cart'])) {
    if (!isset($_SESSION['cart'][$_GET['add_to_cart']])) {
        $_SESSION['cart'][$_GET['add_to_cart']] = 1;
    } else {
        $_SESSION['cart'][$_GET['add_to_cart']] += 1;
    }
}