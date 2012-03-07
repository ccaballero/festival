<h1>Registro</h1>

<form method="post" action="" accept-charset="utf-8">
    <p><label>Procesador: </label><input name="instance_processor" type="text" maxlength="128" /></p>
    <p><label>Memoria RAM: </label><input name="instance_ram" type="text" maxlength="64" /></p>
    <p><label>Disco duro: </label><input name="instance_hdd" type="text" maxlength="64" /></p>
    <p><label>Tarjeta de video: </label><input name="instance_video" type="text" maxlength="64" /></p>
    <p><label>Observaciones: </label><textarea name="instance_comments" cols="30" rows="10"></textarea></p>

    <p class="submit"><input type="submit" value="Registrar" /><input type="button" value="Cancelar" onclick="location.href='<?php echo $this->config->wwwroot . 'instances' ?>'" /></p>
</form>
