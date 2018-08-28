<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$postController = new PostController();
$helper = new Helper();

$listarPost = $postController->retornaUrlPost($urlCod);
if ($listarPost == null):
    echo 'Não existe produto cadastrado';

else:
    $codProd = $listarPost->getCod();
    $codCategoria = $listarPost->getCategoria()->getCod();
    $nomeCategoria = $listarPost->getCategoria()->getTitulo();
    $thumb = $listarPost->getThumb();
    $titulo = $listarPost->getTitulo();
    $descricao = html_entity_decode($listarPost->getDescricao());
    ?>
    <section  class="main-single container">
        <h1 class="font-zero">Porto Seguro - BA</h1>
        <article class="content">
            <h1><?= strtoupper($nomeCategoria); ?></h1>           
            <div class="row">
                <div class="row-comprar-pacote">
                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $thumb; ?>&w=392&h=275&zc=0" alt="<?= $titulo ?>" title="<?= $titulo ?>">                
                </div>

                <div class="desc-pacote">
                    <p class="txt-desc-post"> 
                        <?= $descricao; ?>
                    </p> 

                    <a href="<?= HOME; ?>/contato" class="btn btn-reserva">FAZER RESERVA</a>                
                </div>

                <article class="atencao">

                    <h2> ATENÇÃO:</h2>
                    <p>
                        Todas as informações publicadas nesta página estão 
                        sujeitas a alterações sem aviso prévio, seja em função do aumento
                        das tarifas ou qualquer um dos itens que compõem o roteiro. Vagas limitadas,
                        preços para aptº triplos valores por pessoa. O conteúdo e valor do roteiro
                        será confirmado no ato da reserva.
                    </p>
                </article>

            </div>
        </article>
    </section>
<?php
endif;
?>
