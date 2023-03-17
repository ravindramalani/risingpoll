<!DOCTYPE html>
<html lang="en">
<?php
$url = base_url(); 
$title = $meta_title;
if(isset($poll)){
$title = $poll->title;
    if(isset($poll->head_img)){
        $og_img = base_url('assets/image_poll/'.$poll->head_img);
    }else{
        $og_img = base_url('assets/').'image_share.png' ;
    }
}else{
    $og_img = base_url('assets/').'image_share.png' ;
}

?>
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="XRswGKaRFmUkhpKGCwAjii5YfVIgbb9BGUxgno2hYng" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <?php 
    echo $meta;
    ?>
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:image" content="<?= $og_img; ?>" />
    <meta name="site_url" content="<?= base_url(); ?>">
    <!-- Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pollsite.css?v=<?php echo rand(); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127456458-54"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127456458-54');
    </script>
    <!-- font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        .bg-special{
            background : black;
        }
        .user-image{
            float: left;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 10px;
            margin-top: -2px;
        }
        .arrow-right{
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            border-left: 25px solid #1f5ab2;
        }
        .carousel-item .row .col-md a{
            text-decoration: none !important;
            color : black !important;
        }
        
        @media only screen and (max-width: 600px) {
            .arrow{
                width: 50% !important;
            }
        }
    </style>
</head>

<body>

    <div class="nav-color">
        <nav class="container navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand logoname" href="<?= base_url('') ?>">RisingPoll</a>
            <?php if(isset($signal)): ?>
                <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php else: ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php endif; ?>
            <div class="collapse navbar-collapse mx-5" id="collapsibleNavbar">
                <?php if(!isset($signal)):?>
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link navi" href="<?= base_url('create') ?>">Create Poll</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link navi" href="<?= base_url('blog'); ?>">Blog</a>
                    </li>  
                    <?php if(!$this->session->userdata('fname')){?>
                    <li class="nav-item  hide-d">
                        <a class="nav-link navi" href="<?= base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item  hide-d">
                        <a class="nav-link navi" href="<?= base_url('signup') ?>">Sign Up</a>
                    </li>
                    <?php }else{?>
                    <li class="nav-item mx-2 hide-d">
                        <div class="dropdown show">
                            <a class="nav-link navi" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://manage.eniacworld.com/assets/dist/img/admin-user.png" class="user-image" alt="User Image"> <?=  $this->session->userdata('fname') ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
                                <a class="dropdown-item" href="<?php echo base_url('dashboard/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
                <?php endif; ?>
                <ul class="navbar-nav ml-auto hide-m">
                    <?php if($this->session->userdata('fname')):?>
                    <li class="nav-item mx-2">
                        <div class="dropdown show">
                            <a class="nav-link navi" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://manage.eniacworld.com/assets/dist/img/admin-user.png" class="user-image" alt="User Image"> <?=  $this->session->userdata('fname') ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
                                <a class="dropdown-item" href="<?php echo base_url('dashboard/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </li>
                    <?php if(isset($signal)){?>
                    <li class="nav-item mx-2 text-white">
                        <a id="s-toggle" class="nav-link navi"><i class="fa fa-bars"></i></a>
                    </li>
                    <?php } ?>
                    <!-- <li class="nav-item mx-2">
                        <a class="nav-link navi" href="<?= base_url('signup') ?>">Sign up</a>
                    </li> -->
                    <?php else: ?>
                        <li class="nav-item mx-2">
                        <a class="nav-link navi bg-special px-3" href="<?= base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link navi bg-special px-3" href="<?= base_url('signup') ?>">Sign up</a>
                    </li>
                    <?php endif; ?>
                    
                </ul>
            </div>
        </nav>
    </div>