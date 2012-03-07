<h1>Ingresar</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("input[name=login_email]").focus();
    });
</script>

<div style="float:left; width: 9em;"><img src="<?php echo $this->config->wwwroot ?>/media/128x128/options.png" alt="" title="" /></div>
<div style="margin-top: 35px; padding-left: 10em;">
    <form method="post" action="" accept-charset="utf-8">
        <p><label>Correo electronico: </label><input name="login_email" type="text" maxlength="64" style="width: 16em;"/></p>
        <p><label>Contraseña: </label><input name="login_password" type="password" maxlength="64" style="width: 16em;"/></p>
        <p class="submit"><input type="submit" value="Ingresar" /></p>
    </form>
</div>
