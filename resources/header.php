<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon/favicon-16x16.png">
    <link rel="manifest" href="/resources/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/style.css">
    <title>Stardust hotel</title>
</head>
<body class="bg-light">
    <header class="container-fluid d-flex justify-content-center align-items-center bg-danger bg-gradient text-white">
        <div class="logo ml-auto"><a href="<?php echo BASE_URL.$_GET['lang'];?>/"><img src="/resources/images/logo.png" alt="Img of our logo" width="100"></a></div>
        <div class="wrapper d-flex flex-column gap-3">
            <div class="logo-title"><p class="display-5 m-0">Hotel Stardust</p></div>
            <nav class="main-menu d-flex gap-5 px-1">
                <a href="<?php echo BASE_URL.$_GET['lang']; ?>/?page=kamers"><?php echo HEADER_ITEM[1]; ?></a>
                <a href="<?php echo BASE_URL.$_GET['lang']; ?>/?page=boeken"><?php echo HEADER_ITEM[2]; ?></a>
                <a href="<?php echo BASE_URL.$_GET['lang']; ?>/?page=over-ons"><?php echo HEADER_ITEM[3]; ?></a>
            </nav>
        </div>
        <div class="lang-switch d-flex gap-3 ml-auto">
            <a class="nl m-0" href="<?php echo BASE_URL.'nl/'; if(isset($_GET['page'])) echo '?page='.$_GET['page']; ?>">NL</a>
            <a class="en m-0" href="<?php echo BASE_URL.'en/'; if(isset($_GET['page'])) echo '?page='.$_GET['page']; ?>">EN</a>
        </div>
    </header>
    <div class="img_header">
        <img src="/resources/images/headers/home.jpg" alt="header img">
    </div>