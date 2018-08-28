<?php
$artigoController = new PostController();
$helper = NEW Helper();
?>
<section class="sec-blog container">     
    <div class="content">
        <h1 class="title-blog">Blog</h1>
        <article class="box-blog">
            <?php
            $listarArtigo = $artigoController->listarPostCat(6,0,50);
            foreach ($listarArtigo as $artigo):
                ?>
                <div class="row-blog">

                    <h6>Data: <span> <?php echo $helper->converteData($artigo->getData()); ?></span></h6>
                    <div class="thumb-blog">
                        <img src="<?= HOME; ?>/tim.php?src=upload/<?= $artigo->getThumb();?>&w=300&h=170&zc=0" alt="<?= $artigo->getTitulo();?>">  
                    </div>

                    <div class="info-blog">
                        <h1><?php echo $artigo->getTitulo(); ?></h1>
                        <p>
                            <?php echo $helper->Words(html_entity_decode($artigo->getDescricao()), 2); ?>
                        </p>
                        <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" class="btn btn-artigo">Saiba Mais</a>
                    </div>                
                </div>
                <?php
            endforeach;
            ?>

        </article>
    </div>
</section>