<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Login</title>
        <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div style="margin:auto;">
            <div id="login-box">
                <form method="post" action="<?= site_url('login') ?>">
                    <H3> Dutta Fashion S.r.l. </H3>
                    <div id="login-box-name" style="margin-top:20px;">User name :</div>
                    <div id="login-box-field" style="margin-top:20px;">
                        <input name="user_name" class="form-login" title="user_name" value="" size="30" maxlength="2048" />
                    </div>
                    <div id="login-box-name">Password :</div>
                    <div id="login-box-field">
                        <input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" />
                    </div>
                    <br />
                    <br />
                    <input type="submit" value="Login" class="login_button">
                        <!--span class="login-box-options"><a href="#" style=" color:#666;margin-left:10px;">Forgot password?</a></span--> 
                </form>
            </div>
        </div>
    </body>
</html>
