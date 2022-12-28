<?php
    require_once "stripe/init.php";

    $stripeDetails = array(
        "secretKey" => "YOUR SECRET KEY",
        "publishableKey" => "YOUR PUBLISHABLE KEY"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>