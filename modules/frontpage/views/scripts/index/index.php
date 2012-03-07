<h1>Festival de instalación debian 6.0 "Squeeze"</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("body").css("background-image", "url('<?php echo $this->config->wwwroot ?>media/background/squeeze.jpg')");
    });
</script>

<p>
    Aprovechando el lanzamiento de la nueva versión de debian, realizamos un evento de instalación de la version 6.0 "Squeeze";
    si siempre quisiste usar debian y nunca pudiste, entonces esta es tu oportunidad.
</p>

<p>
    Registra tu maquina y asegurate que tu computadora puede gozar de esta magnifica distribución.
    <?php if ($this->user->ident <> 0) { ?>
        <a href="<?php echo $this->url(array(), 'instances_add') ?>">Registrar mi maquina</a>
    <?php } else { ?>
        <a href="<?php echo $this->url(array(), 'register') ?>">Registrarme ahora</a>
    <?php } ?>
</p>

<p>
    Si todavia no estas seguro o no crees tener la información necesaria, puedes leer acerca de que 
    es <a href="<?php echo $this->url(array(), 'info_linux') ?>">linux</a> y
    <a href="<?php echo $this->url(array(), 'info_debian') ?>">debian</a> o consultar tus preguntas en el
    <a href="<?php echo $this->url(array(), 'faq_list') ?>">FAQ</a>.
</p>

<h2>Agenda</h2>

<p>
    <span class="bold">Seminario: </span>
    25 de marzo, 16:00 Auditorio 2 en la FCyT (ultimo piso edificio nuevo)
<ul>
    <li>¿Qué es GNU/Linux y software libre?</li>
    <li>Software libre en la educacion superior</li>
</ul>
</p>

<p>
    <span class="bold">Festival de instalación: </span>
    26 de marzo, Laboratorio 1 de informática & sistemas (último piso MEMI)
</p>

<h2>Organiza:</h2>

<p style="margin-left: 2.0em;"><a href="http://scesi.fcyt.umss.edu.bo"><img style="border:none;" src="<?php echo $this->config->wwwroot ?>media/scesi.png" height="200" alt="" title="" /></a></p>
