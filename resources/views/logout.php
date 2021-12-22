<?php 
session_destroy();
header('Location: /'.$_GET['lang'].'/');
exit();