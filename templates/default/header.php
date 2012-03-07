<div id="toolbar">
    <div class="left">
        <a class="<?php echo $this->active == 'frontpage' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>">
            <img src="<?php echo $this->config->wwwroot ?>media/16x16/house.png" alt="Pagina principal" title="Pagina principal" />
        </a>
        <a class="<?php echo $this->active == 'linux' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>info/linux">
            <img src="<?php echo $this->config->wwwroot ?>media/16x16/tux.png" alt="¿Que es linux?" title="¿Que es linux?" />
        </a>
        <a class="<?php echo $this->active == 'debian' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>info/debian">
            <img src="<?php echo $this->config->wwwroot ?>media/16x16/debian.png" alt="¿Que es debian?" title="¿Que es debian?" />
        </a>
        <a class="<?php echo $this->active == 'faq' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>faq">
            <img src="<?php echo $this->config->wwwroot ?>media/16x16/information.png" alt="FAQ" title="FAQ" />
        </a>
    </div>
    <div class="right">
        <?php if ($this->user->ident == 0) { ?>
            <a class="<?php echo $this->active == 'login' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>login">Ingresar</a>
            <a class="<?php echo $this->active == 'register' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>register">Registrarse</a>
        <?php } else { ?>
            <a class="<?php echo $this->active == 'instances' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>instances">Maquinas</a>
            <a class="<?php echo $this->active == 'settings' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>settings">Preferencias</a>
            <a class="<?php echo $this->active == 'logout' ? 'active' : 'inactive' ?>" href="<?php echo $this->config->wwwroot ?>logout">Salir</a>
        <?php } ?>
    </div>
</div>
