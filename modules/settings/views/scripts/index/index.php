<h1>Preferencias</h1>

<p>Si desea cambiar su contraseña, escribala en los campos de contraseña; caso contrario procure dejarlos en blanco.</p>

<div style="float:left; width: 9em;"><img src="<?php echo $this->config->wwwroot ?>/media/128x128/address-book.png" alt="" title="" /></div>
<div style="margin-top: 35px; padding-left: 10em;">
    <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8">
        <p><label>Nombre completo: </label><input name="settings_fullname" type="text" maxlength="128" value="<?php echo $this->user->fullname ?>" /></p>
        <p><label>Correo electronico: </label><input name="settings_email" type="text" maxlength="64" value="<?php echo $this->user->email ?>" /></p>
        <p><label>Avatar: </label><?php echo $this->formFile('settings_photo') ?></p>

        <p class="bold">Cambio de contraseña:</p>
        <p><label>Contraseña nueva: </label><input name="settings_password" type="password" maxlength="64" /></p>
        <p><label>Repetir contraseña: </label><input name="settings_password_confirm" type="password" maxlength="64" /></p>

        <p class="submit"><input type="submit" value="Guardar" /><input type="button" value="Cancelar" onclick="location.href='<?php echo $this->config->wwwroot ?>'" /></p>
    </form>
</div>
