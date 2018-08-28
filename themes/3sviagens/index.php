<?php
$categoria = new Categoria();
$post = new Post();
$postController = new PostController();
$helper = new Helper();

?>
<!--------------------------------- SLIDE SITE -------------------------------->
<main class="main-slider container">    
    <section class="slider">
        <h1 class="font-zero">Últimas do site:</h1>          

        <article class="slider_item first">
            <h1 class="font-zero">APARECIDA DO NORTE/ CAMPOS DO JORDAO - SP</h1>
            <a href="http://3sviagens.com.br/single/aparecida-do-norte-sp-campos-do-jordao"  title="APARECIDA DO NORTE/ CAMPOS DO JORDAO - SP">
                <picture alt="BANNER CAMPOS DO JORDAO">
                    <source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">
                </picture> 
                <img src="<?= REQUIRE_PATH; ?>/images/slider-a.jpg" alt="BANNER CAMPOS DO JORDAO" title="APARECIDA DO NORTE/ CAMPOS DO JORDAO - SP">
            </a>
        </article>
        
        <article class="slider_item">
            <h1 class="font-zero">FERIAS DE JANEIRO 2018 /PROMOÇAO</h1>
            <a href="http://3sviagens.com.br/single/porto-seguro-janeiro-2018"  title="FERIAS DE JANEIRO 2018 /PROMOÇAO">
                <picture alt="BANNER RIO DE JANEIRO">
                    <source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">
                </picture>                                      
                <img src="<?= REQUIRE_PATH; ?>/images/slider-b.jpg" alt="FERIAS DE JANEIRO 2018" title="FERIAS DE JANEIRO 2018 /PROMOÇAO DE PACOTES">
            </a>
        </article>
        
        <article class="slider_item">
            <h1 class="font-zero">FERIAS DE JANEIRO SAIDAS TODA SEXTA FEIRA 2018</h1>
            <a href="<?= HOME; ?>/#ver" title="FERIAS DE JANEIRO SAIDAS TODA SEXTA FEIRA 2018 
JALIM STANDART">
                    <source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">
                </picture>
                <img src="<?= REQUIRE_PATH; ?>/images/slider-c.jpg" alt="BANNER FÉRIAS E HOSPEDAGEM" title="FERIAS DE JANEIRO SAIDAS TODA SEXTA FEIRA 2018 
JALIM STANDART">
            </a>                        
        </article>
    </section>    
    <div class="clear"></div>
</main>          
<!--slider-->

<!--PROMOÇÕES - FROTA - PACOTES-->
<section class="container bg-light">
    <h1 class="font-zero">Veja mais que 3s turismo tem a oferecer</h1>
    <div class="content">
        <div class="main-oferecer">

            <article class="row-oferecer">
                <div class="row-thumb-text">
                    <div class="thumb">
                        <img src="<?= INCLUDE_PATH; ?>/images/cart.png">
                    </div>
                    <div class="text">
                        <h1>Promoções</h1>
                        <p>Durante toda a semana postamos em nosso blog promoções para você e toda a sua família.</p>
                    </div>
                </div>
            </article>

            <article class="row-oferecer row-space">
                <div class="row-thumb-text">
                    <div class="thumb">
                        <img src="<?= INCLUDE_PATH; ?>/images/bus.png">
                    </div>
                    <div class="text">
                        <h1>Nossa Frota</h1>
                        <p>Nosso veiculos são totalmente confortáveis para que você tenha total conforto em sua viagens.</p>
                    </div>
                </div>
            </article>                    
            <article class="row-oferecer">
                <div class="row-thumb-text">
                    <div class="thumb">
                        <img src="<?= INCLUDE_PATH; ?>/images/ag.png">
                    </div>
                    <div class="text">
                        <h1>Pacotes</h1>
                        <p class="text-pacotes">Pacotes fechados para ciades em todo Brasil e exterior.</p>
                    </div>
                </div>
            </article>                    
        </div>
    </div>
    <div class="clear"></div>
</section>

<!--AS MELHORES OFERTAS -->
<section class="container bg-light main-ofertas">    
    <div class="content">
        <h1 class="al-center">AS MELHORES OFERTAS VOCÊ ENCONTRA AQUI!</h1>
<?php

$listarPostCat = $postController->listarPostCat(7,0,4);
    foreach ($listarPostCat as $pacote):        
        ?>
            <article class="row-ofertas anime">
                <a href="<?= HOME; ?>/pacotes">
                    <h1>
                        <?php echo $helper->Words(html_entity_decode($pacote->getTitulo()),3); ?>                
                    </h1>                    
                     <span><?= $helper->converteData($pacote->getData()); ?></span>
                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $pacote->getThumb();?>&w=300&h=250&zc=0" alt="<?= $pacote->getTitulo();?>">
                    <p>
                       <?php echo $helper->limitarTexto(html_entity_decode($pacote->getDescricao()), 130); ?>                        
                    </p>
                    <div class="box-btn-package">
                    <button href="<?= HOME; ?>/pacotes" class="btn btn-ofertas">Confira!</button>
                    </div>
                </a>
            </article>
<?php
  endforeach;  
?>
    </div>
    <div class="clear"></div>
</section>

<!--BLOG -->
<section class="container bg-light main-ofertas">
    <h1 class="al-center" style="margin-top: 4rem;">ÚLTIMAS DO BLOG</h1>
    <div class="content">
<?php
    
$listarArtigo = $postController->listarPostCat(6,0,4);
foreach ($listarArtigo as $artigo):        
    ?>
            <article class="row-ofertas content anime">
                <h1><?php echo $artigo->getTitulo();?></h1>
                <span><?= $helper->converteData($artigo->getData()); ?></span>
                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $artigo->getThumb();?>&w=300&h=230&zc=0" alt="<?= $artigo->getTitulo();?>" alt="">
                <p>
                 <?php
                 echo $helper->Words(html_entity_decode($artigo->getDescricao()), 20);
                 ?>
                </p>
                <a href="<?= HOME; ?>/blog" class="btn btn-confira">Confira!</a>
            </article>
    <?php
endforeach;
?>
    </div>
    <div class="clear"></div>
</section>

<!--QUEM SOMOS -->
<section class="container section-quem-somos">
    <div class="sect-thumb">
        <img class="thumb" src="<?= INCLUDE_PATH; ?>/images/pessoasG.png">
    </div>

    <div class="sect-text">
        <div class="quem-text anime">
            <h1>Quem Somos</h1>
            <p>A 3S Turismo é uma empresa líder no mercado há 20 anos,
                que trabalha com seriedade e compromisso com o seu bem estar. 
                Estamos sempre em busca de inovações, com investimento em equipamento
                e melhoria do atendimento. Disponibilizamos de uma equipe familiar,
                capacitada e responsável para melhor atendê-lo.
            </p>

            <a href="<?= HOME; ?>/quem-somos" class="btn btn-confira-mais">Confira Mais...</a>
        </div>
    </div>
    <div class="clear"></div>
</section>