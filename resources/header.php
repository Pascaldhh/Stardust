<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
    <link rel="manifest" href="resources/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/style.css">
    <title>Stardust hotel</title>
</head>
<body>
    <header class="container-fluid d-flex justify-content-between align-items-center bg-danger bg-gradient text-white">
        <div class="logo"><a href="?lang=<?php echo $_GET['lang']; ?>"><img src="./resources/images/logo.png" alt="Img of our logo" width="50"></a></div>
        <nav class="main-menu d-flex gap-5">
            <a href="?lang=<?php echo $_GET['lang']; ?>&page=kamers"><?php echo HEADER_ITEM[1]; ?></a>
            <a href="?lang=<?php echo $_GET['lang']; ?>&page=boeken"><?php echo HEADER_ITEM[2]; ?></a>
            <a href="?lang=<?php echo $_GET['lang']; ?>&page=over-ons"><?php echo HEADER_ITEM[3]; ?></a>
        </nav>
        <div class="lang-switch d-flex gap-2"><a class="nl m-0" href="?lang=nl">NL</a><a class="en m-0" href="?lang=en">EN</a></div>
    </header>