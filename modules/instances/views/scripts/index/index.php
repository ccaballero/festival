<h1>Registro de maquinas</h1>

<?php if ($this->user->ident <> 0) { ?>
    <p>Opcionalmente puedes <a href="<?php echo $this->url(array(), 'instances_add') ?>">registrar tu maquina</a>, y de este modo asegurarte
    que cualquier caracteristica especial sea contemplada durante el festival.</p>
<?php } ?>

<h2>Maquinas registradas</h2>
<?php if (count($this->list_instances) != 0) { ?>
    <table>
        <tr>
            <th>Procesador</th>
            <th>Memoria RAM</th>
            <th>Disco duro</th>
            <th>Tarjeta de video</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($this->list_instances as $key => $instance) { ?>
        <tr class="<?php echo $key % 2 == 0 ? 'even' : 'odd' ?>">
            <td><?php echo $instance->processor ?></td>
            <td><?php echo $instance->ram ?></td>
            <td><?php echo $instance->hdd ?></td>
            <td><?php echo $instance->video ?></td>
            <td class="center"><a href="<?php echo $this->url(array('instance' => $instance->ident), 'instances_instance_delete') ?>">Eliminar</a></td>
        </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>No registraste ninguna maquina aún.</p>
<?php } ?>
<br/>

<h2>Requisitos de memoria y espacio en disco</h2>
<p>Debe tener al menos 56MB de memoria y 650MB espacio de disco duro para realizar una instalación normal. Tenga en cuenta que éstos son los mínimos absolutos. Para un sistema mínimo basado en consola (todos los paquetes estándar), se requiere 250 MB. Si quiere instalar una cantidad razonable de software, incluyendo el sistema de ventanas X, y algunos programas y bibliotecas de desarrollo, necesitará al menos 400 MB. Para una instalación más o menos completa de un sistema de escritorio, necesitará unos cuantos gigabytes.</p>
