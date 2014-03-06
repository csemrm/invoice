<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>
            <?= !empty($page_title) ? $page_title : " "; ?>
        </title>

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
                    <li><a href="<?= site_url('invoice'); ?>">DDT</a></li>
                    <li><a href="<?= site_url('invoice/add'); ?>">Add</a></li>
                    <li><a href="<?= site_url('pwd_reset'); ?>">Admin</a></li>
                    <li><a href="<?= site_url('login/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- end header contener--> 

            <!-- start body contener-->

            <div class="body_contenet">
                <div class="company_name">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="350"><h1>Dutta  Fashion S.r.l</h1>
                                Via Adda 13/B - 20863 Concorezzo (MB)</td>
                            <td align="right" width="600" >
                                <div style="padding: 5px; border: 1px solid #ccc">
                                    <div>Partita Iva e numero di registrazione Camera di commercio 08305980966 - PRZ FLL67A67 F704K</div>
                                    <div>VAT number and Chamber of commerce registration number 08305980966 - PRZ FLL67A67 F704K</div>
                                    <div> Numero REA MB 1890803/Company number MB 1890803</div>
                                </div></td>
                        </tr>
                    </table>
                </div>	