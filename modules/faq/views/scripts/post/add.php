<h1>Agregar consulta</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("body").css("background-image", "url('<?php echo $this->config->wwwroot ?>media/background/faq.jpg')");
        $("textarea[name=faq_post]").focus();
    });
</script>

<p>Escribe tu consulta y nosotros te responderemos lo antes posible</p>

<form method="post" action="" accept-charset="utf-8">
    <p><label>Consulta:</label><textarea name="faq_post" cols="10" rows="10"></textarea></p>
    <p class="submit"><input type="submit" value="Enviar" /><input type="button" value="Cancelar" onclick="location.href='<?php echo $this->url(array(), 'faq_list') ?>'" /></p>
</form>
