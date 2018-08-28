<?php
$postController = new PostController();
$imagemController = new ImagemController();
$helper = new Helper();

$search = filter_input(INPUT_POST, "textoPesquisado", FILTER_SANITIZE_SPECIAL_CHARS);

//$listarPesquisa = $postController->buscarProduto($search);
$listaPost = $postController->buscarPost($search);
?>
<div class="main_pacote container">
    <div class="pacotes">
        <img src="<?= REQUIRE_PATH; ?>/images/pacotes.jpg">
        <h1 class="al-center">CONFIRA NOSSOS PACOTES!</h1>
    </div>

    <div class="content">
        <div class="sidebar-search">
            <!------------------------------------FORMULÁRIO DE PESQUISAR------------------------>
            <form class="form-pacote" method="post" action="<?= HOME ?>/single-search">
                <h2>Buscar</h2>
                <input type="search" name="textoPesquisado" placeholder="Pesquisar...">                
                <button  name="search"  class="btn-search"><span class="fa fa-search"></span></button>               
            </form>
            <!------------------------------------LISTAGEM DE PACOTES ABAIXO DO PESQUISA------------------------>
            <ul>
                <?php
                $listarPct = $postController->listarPostCat(7, 0, 5);
                foreach ($listarPct as $package):
                    ?>                 
                    <li><a class="btn-pacotes" href="<?= HOME; ?>/single/<?= $package->getUrl(); ?>"><?php echo $package->getTitulo(); ?></a></li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
        <!---------------------------------- SECAO CARREGANDO FILE COM AJAX --------------------------------->
        <?php
        if ($search == null):
            ?>
            <article class = "row-pacotes">
                <h1 class="titulo_produto">Opsss, não existe esse pacote cadastrado!</h1> 
            </article>                
            <?php
        else:
            ?>

            <?php
            if ($listaPost == null):
                ?>
                <article class = "row-pacotes">
                    <h1 class="titulo_produto">Opsss, não existe esse pacote cadastrado!</h1> 
                </article> 
                <?php
            else:
                ?>    

                <section class="sec-thumb-pacotes">            
                    <div class="artigo_search">                       
                        <article class = "row-pacotes row-page-search">
                            <?php
                            foreach ($listaPost as $post):
                                ?>
                                <!-------------------------------------- AQUI CARREGA AS TAG HTML ----------------------------------->
                                <a href ="<?= HOME; ?>/single-produto/<?= $post->getUrl(); ?>" class = "box-thumb-pac  anime anime-init">
                                    <span><?php $helper->converteData($post->getData()); ?></span>
                                    <h1><?= $helper->limitarTexto($post->getTitulo(), 25); ?></h1>
                                    <div class = "thumb-pacote">
                                       <img src="<?= HOME; ?>/tim.php?src=upload/<?= $post->getThumb(); ?>&w=309&h=214&zc=0" alt="<?= $post->getTitulo(); ?>">
                                       
                                        <div class = "box-hover-pacotes">
                                            <button class="btn btn-veja">
                                                Confira
                                            </button>
                                        </div>
                                    </div>
                                    <div class="desc-pacote">
                                        <p class="txt-pacote"><?php echo $helper->Words(html_entity_decode($post->getDescricao()), 3); ?></p>
                                    </div>
                                </a>
                                <?php 
                            endforeach;
                            ?>
                        </article
                    </div>
                </section>
            </div>
        </div>
    <?php
    endif;
    ?>
<?php
endif;
?>