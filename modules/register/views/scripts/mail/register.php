<p>Hola mi estimado <?php echo $this->user->fullname ?>.</p>

<p>Tu acabas de registrarte en el sitio <?php echo $this->config->wwwroot ?>, por tal motivo se te envia este mail,,, para confirmar
tu correo y proveerte de los datos de acceso al sitio.</p>

<p>Si quieres proseguir con el registro, te damos la bienvenida:</p>

<p>Los datos en la tabla son necesarios para tu acceso al sistema:</p>

<center>
    <table>
        <tr><td>Correo electronico: </td><td><?php echo $this->user->email ?></td></tr>
        <tr><td>Contraseña: </td><td><?php echo $this->password ?></td></tr>
    </table>
</center>
