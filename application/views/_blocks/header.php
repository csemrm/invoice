<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title><?= !empty($page_title) ? $page_title : " "; ?></title>
        <meta name="keywords" content="<?= !empty($meta_keywords) ? $meta_keywords : " "; ?>">
        <meta name="description" content="<?= !empty($meta_description) ? $meta_description : " "; ?>">
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
        <script src="<?= base_url() ?>assets/js/jquery-1.9.1.js"></script>
        <script src="<?= base_url() ?>assets/js/ddt.js"></script>
    </head>
    <body>
        <!-- start contener-->
        <div class="contener"> 
            <!-- start header contener-->

            <div class="header">
                <ul>
                  <!--   <li><a href="<?= site_url('invoice'); ?>">yearly DDT</a></li>-->
                    <li><a href="<?= site_url('fattura_invoice'); ?>">Fattura Invoice</a></li>
                    <li><a href="<?= site_url('ddt'); ?>">DDt</a></li>
                  <!--  <li><a href="<?= site_url('invoice/add'); ?>">yearly ddt_Add</a></li>-->
					<li><a href="<?= site_url('fattura_invoice/add'); ?>">Fattura Add</a></li>
					<li><a href="<?= site_url('ddt/add'); ?>">DDt Add</a></li>
                    <li><a href="<?= site_url('pwd_reset'); ?>">Admin</a></li>
                    <li><a href="<?= site_url('login/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- end header contener--> 
