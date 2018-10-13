<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$titulo?></title>

    <?php
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $symbian = strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) :
        $phone = true;
        $dir = './css/freelancermobile.css';
    else :
        $phone = false;
        $dir = './css/freelancer.css';

    endif;
    ?>
    <!-- Bootstrap Core CSS -->
    <link href="slick/slick.css" rel="stylesheet">
    <link href="slick/slick-theme.css" rel="stylesheet">
    <link href="css/slicker-menu.css" rel="stylesheet">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <?php echo '<link href="'.$dir.'"rel="stylesheet">';?>

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body id="page-top" class="index">
<div id="skipnav">
    <a href="#maincontent">Skip to main content</a>
</div>