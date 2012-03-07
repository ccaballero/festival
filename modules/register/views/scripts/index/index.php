<h1>Registro</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("input[name=register_fullname]").focus();
    });
</script>

<p>Al registrate tendrás el privilegio de hacer consultar en el foro, ademas de poder registrar tu maquina.</p>

<div style="float:left; width: 9em;"><img src="<?php echo $this->config->wwwroot ?>/media/128x128/book.png" alt="" title="" /></div>
<div style="margin-top: 56px; padding-left: 10em;">
    <form method="post" action="" accept-charset="utf-8">
        <p><label>Nombre completo: </label><input name="register_fullname" type="text" maxlength="128" style="width: 16em;"/></p>
        <p><label>Correo electronico: </label><input name="register_email" type="text" maxlength="64" style="width: 16em;"/></p>
        <p class="submit"><input type="submit" value="Registrar" /></p>
    </form>
</div>
