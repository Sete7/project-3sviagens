<?php
$postController = new PostController();
$helper = new Helper();
?>
<div class="main_pacote container">
    <div class="pacotes">
        <img src="<?= REQUIRE_PATH; ?>/images/pacotes.jpg">
        <h1 class="al-center">CONFIRA NOSSOS PACOTES!</h1>
    </div>

    <div class="content">
        <div class="sidebar-search">
            <form class="form-pacote" method="post" action="<?= HOME ?>/single-search">
                <h2>Buscar</h2>
                <input type="search" name="textoPesquisado" placeholder="Pesquisar...">                
                <button  name="search"  class="btn-search"><span class="fa fa-search"></span></button>               
            </form>
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
        <section class="sec-thumb-pacotes">
            <h1>Nossos Pacotes</h1>
            <div class="artigo_destaque">
                <article class = "box_thumb_destaques row-pacotes" id="box_thumb_destaques">
                    <!-------------------------------------- AQUI CARREGA AS TAG HTML ----------------------------------->
                </article>                
                <!-------------------------------------- BOTAO CARREGAR MAIS PACOTES ----------------------------------->
                <div class="btn-carregar">
                    <a href="#box_thumb_destaques" class="btn btn-red btn-carregar-mais j_read">Carregar Mais</a>
                </div>                
                <div class="lendoArtigos">
                    <img class="load" src="<?= REQUIRE_PATH ?>/images/load.gif">
                    <p>Aguarde, carregando imóveis</p>
                </div>
            </div>
        </section>
    </div>
</div>
