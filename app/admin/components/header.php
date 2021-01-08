<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login");
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Dashboard :: Nigerian Queen™ </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/libs/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <meta property="og:url" content="https://voteonline.com.ng/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nigerian Queen™ :: Beauty for Purpose">
    <meta property="og:description" content="The Nigerian Queen beauty pageant mission is to find and promote exceptional young ladies with value and virtues that can positively affect her generation, environment and also having strong interest in humanitarian services">
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,Nigerian Queen,TNQ,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,pageantry,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/XSGaWUp.png">
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist &amp; Product/Graphic Designer.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/TNznbKa.png" />
</head>

<body>
