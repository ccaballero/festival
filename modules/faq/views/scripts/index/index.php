<h1>Consultas</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("body").css("background-image", "url('<?php echo $this->config->wwwroot ?>media/background/faq.jpg')");
        $(".button_comment").click(function () {
            $("#list_" + this.id).fadeToggle();
        });
    });
</script>

<?php if ($this->user->ident <> 0) { ?>
    <p>Busca entre las consultas para ver si ya se ha contestado tu pregunta, sino puedes <a href="<?php echo $this->url(array(), 'faq_add') ?>">Agregar una consulta</a>.</p>
<?php } ?>

<?php if (count($this->list_posts) != 0) { ?>
    <?php foreach ($this->list_posts as $key => $post) { ?>
        <?php $author = $post->getAuthor(); ?>
        <?php $comments = $post->getComments(); ?>
        <div class="faq <?php echo $key % 2 == 0 ? 'even' : 'odd' ?>">
            <div class="photo">
                <a name="post_<?php echo $post->ident ?>"><img src="<?php echo $author->getAvatar() ?>" alt="<?php echo $author->fullname ?>" title="<?php echo $author->fullname ?>" /></a>
            </div>
            <div class="details">
                <p><?php echo $this->specialEscape($this->escape($post->text)) ?></p>
            </div>
            <div class="tools">
                <a class="button_comment" id="comment_post_<?php echo $post->ident ?>" href="#post_<?php echo $post->ident ?>">Comentarios (<?php echo count($comments) ?>)</a>
                <span><?php echo $this->timestamp($post->tsregister) ?></span>
            <?php if ($post->amAuthor()) { ?>
                <a href="<?php echo $this->url(array('post' => $post->ident), 'faq_post_delete') ?>">Eliminar</a>
            <?php } ?>
            </div>
            <div class="comments" id="list_comment_post_<?php echo $post->ident ?>">
            <?php if (count($comments) != 0) { ?>
                <?php foreach($comments as $key => $comment) { ?>
                    <?php $comment_author = $comment->getAuthor(); ?>
                    <div class="faq <?php echo $key % 2 == 0 ? 'even' : 'odd' ?>">
                        <div class="photo">
                            <img src="<?php echo $comment_author->getAvatar() ?>" alt="<?php echo $comment_author->fullname ?>" title="<?php echo $comment_author->fullname ?>" />
                        </div>
                        <div class="details"><p><?php echo $this->specialEscape($this->escape($comment->comment)) ?></p></div>
                        <div class="tools">
                            <span><?php echo $this->timestamp($comment->tsregister) ?></span>
                        <?php if ($comment->amAuthor()) { ?>
                            <a href="<?php echo $this->url(array('post' => $post->ident, 'comment' => $comment->ident), 'faq_post_comment_delete') ?>">Eliminar</a>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="clear"></div>
                <?php } ?>
            <?php } ?>
                <form method="post" action="<?php echo $this->url(array('post' => $post->ident), 'faq_post_comment_add') ?>" accept-charset="utf-8">
                    <textarea name="faq_post_comment" cols="30" rows="10"></textarea><br/>
                    <input type="submit" value="Comentar" />
                </form>
            </div>
        </div>
        <div class="clear"></div>
    <?php } ?>
<?php } else { ?>
    <p>No se encontrarón consultas.</p>
<?php } ?>
