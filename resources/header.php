<!DOCTYPE html>
<html lang="<?php echo $_GET['lang']; ?>">
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
    <div class="bg-danger bg-gradient">
        <header class="container container-fluid d-flex justify-content-center align-items-center text-white">
            <div class="logo ml-auto"><a href="<?php echo BASE_URL.$_GET['lang'];?>/"><img src="/resources/images/logo.png" alt="Img of our logo" width="100"></a></div>
            <div class="wrapper d-flex flex-column gap-3">
                <div class="logo-title"><p class="display-5 m-0">Hotel Stardust</p></div>
                <nav class="main-menu d-flex gap-5 px-1">
                    <?php
                       
                    for($i=2; $i<count(HEADER_ITEM); $i++)
                    {
                        echo '<a class="'; if($array[$i] == $page) echo 'active'; echo '" href="?page='.$array[$i].'">'.HEADER_ITEM[$i] .'</a>';
                    }

                    ?>
                </nav>
            </div>
            <div class="group ml-auto d-flex flex-column gap-4">
                <div class="lang-switch d-flex gap-3 align-self-end">
                    <a class="nl m-0" href="<?php echo '/nl/'; if(isset($_GET['page'])) echo '?page='.$_GET['page']; ?>">NL</a>
                    <a class="en m-0" href="<?php echo '/en/'; if(isset($_GET['page'])) echo '?page='.$_GET['page']; ?>">EN</a>
                </div>
                <div class="login-register d-flex gap-2 align-items-center">
                    <?php 
                    
                    if(isset($_SESSION['logged-in'])) 
                    {
                        echo '
                        <div class="account">
                            Account
                            <ul class="account_menu bg-danger bg-gradient rounded flex-column gap-1">';
                            for($j=0; $j<count(LOGGEDIN_MENU); $j++)
                            {
                                echo '<a class="'; if($array2[$j] == $page) echo 'active'; echo '" href="?page='.$array2[$j].'">'.LOGGEDIN_MENU[$j] .'</a>';
                            }
                        echo'</ul>
                        </div>
                        <a class="btn btn-primary" href="?page=logout">Logout</a>';
                    }
                    else
                    {
                        echo '
                        <a class="btn btn-primary" href="?page=login">'. HEADER_ITEM[0].'</a>
                        <a class="btn btn-primary" href="?page=register">'.HEADER_ITEM[1].'</a>';
                    }
                    
                    ?>
                </div>
            </div>
            
        </header>
    </div>
    <?php 
            echo '<div class="img_header">
                    <img src="/resources/images/headers/'.$page.'.jpg" alt="header img">
                </div>';
        
    ?>
    