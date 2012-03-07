<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-language" content="es-BO" />
        <title>Festival de instalación</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->wwwroot ?>templates/default/css/style.css" />
        <script type="text/javascript" src="<?php echo $this->config->wwwroot ?>library/jQuery/jquery-1.5.1.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <?php echo $this->render('default/header.php') ?>
            </div>
            <div class="shadow-top"></div>
            <div id="main">
                <?php echo $this->render('default/messages.php') ?>
                <?php echo $this->layout()->content ?>
            </div>
        </div>
    </body>
</html>
