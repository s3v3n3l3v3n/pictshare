<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo (defined('TITLE')?TITLE:'Darkcave Image Hosting'); ?></title>
        
        <!-- Bootstrap -->
        <link href="<?php echo PATH; ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- PictShare overwrites -->
        <link href="<?php echo PATH; ?>css/pictshare.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </HEAD>
    <BODY>

        <div class="container" id="headcontainer">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="well">
                        <?php echo $content?>
                    </div>
                </div>
            </div>
	    </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo PATH; ?>js/bootstrap.min.js"></script>
    </BODY>
</HTML>
