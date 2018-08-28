<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$artigoController = new PostController();
$helper = new Helper();

$listarSartigo = $artigoController->retornaUrlPost($urlCod);
if ($listarSartigo == null):
    echo 'Não existe post cadastrado';

else:
    $codProd = $listarSartigo->getCod();
    $codCategoria = $listarSartigo->getCategoria()->getCod();
    $nomeCategoria = $listarSartigo->getCategoria()->getTitulo();
    $thumb = $listarSartigo->getThumb();
    $titulo = $listarSartigo->getTitulo();
    $data = $listarSartigo->getData();
    $descricao = html_entity_decode($listarSartigo->getDescricao());
    ?>
<div class="main-artigo container">
    <div class="content">
        <h1><?= strtoupper($nomeCategoria); ?></h1>
        <div class="box-artigo">
            <h6><span><?= $helper->converteData($data); ?></span></h6>
            <div id="artigoDia" class="thumb-img-artigo">
                <img src="../upload/<?= $thumb; ?>" alt="<?= $titulo ?>" title="<?= $titulo ?>"/>  
                <div>
                    <p><?= $titulo; ?></p>
                </div>
                
                 <div class="txt-artigo">
                    <p>
                        <?= $descricao; ?>
                    </p>
                </div>
                
            </div>            
<?php
endif;
?>
            
            
            <div class="artigos-recentes">
                <h2>Artigos Recentes</h2>

                <?php
                    $artigoSidebar = $artigoController->listarPostCat(6,0,4);
                    foreach ($artigoSidebar as $sidebar):
                ?>
                <a href="<?= HOME; ?>/artigo/<?= $sidebar->getUrl(); ?>" class="box-art-thumb">               
                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $sidebar->getThumb();?>&w=80&h=50&zc=0" alt="<?= $sidebar->getTitulo();?>">
                        <div class="text-recente">
                            <h3><?php echo $helper->limitarTexto($sidebar->getTitulo(),10);?></h3>
                            <p> 
                                <?php echo $helper->Words(html_entity_decode($sidebar->getDescricao()), 3); ?>
                            </p>
                        </div>
                    </a>
                    <?php
                 endforeach;
                ?>
            </div>

            <div class="box-comentario">
                <h1>Deixe seu Comentário</h1>
                <form class="form-artigo">
                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Nome*">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Email*">
                    <label>Descrição:</label>
                    <textarea rows="5" cols="10"></textarea>
                    <input type="submit" name="submit" class="btn btn-comentario" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
