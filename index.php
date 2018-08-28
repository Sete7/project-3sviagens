<?php require_once './app/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Article">
    <head>
        <meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">		
        <title>3Sviagens, sua agência de turismo</title>
		<meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Faça sua viajem com uma das melhores empresas de viagem e turismo, oferecendo pacotes com preços em conta e sem igual, tenha conforto, tempo e qualidade de nossos serviços em suas viagens."/>
        <meta name="keywords" content="viagem, turismo, hospedagem, férias,qualidade de vida, conforto a beira da praia, férias em família."/>
        <meta name="author" content="Junio Santos | Telmo Ricardo"/>
        <meta name="publisher" href="https://www.inovepublicidade.com/novo"/>
        <link rel="canonical" href="https://3sviagens.com.br/pacotes">
        <link rel="icon" type="image/png" href="<?= INCLUDE_PATH; ?>/images/favicon-a.png" title="3S Turismo" />
        <link href="<?= INCLUDE_PATH; ?>/css/boot.css" rel="stylesheet" type="text/css"/>       
        <link href="<?= INCLUDE_PATH; ?>/css/site.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/media.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Nova+Slim" rel="stylesheet">
    </head>
    <body>
        <main class="site">
            <h1 class="font-zero">3sviagens</h1>
            <header class="container bg-red">
                <div class="header-topo content al-center">                    
                    <div class="row">
                        <div class="column column-6">
                            Contatos: (61)99601-8697 |98117-0210 |3336-5639 |3336-7914
                        </div>
                        <div class="column column-6">
                            E-mail: contato@3sviagens.com.br | contato3sviagens@gmail.com
                        </div>
                    </div>                   
                </div>
                <div class="container header-logo">
                    <div class="content">

                        <!------------------------------------------------------ LOGO ------------------------------------------>
                        <h2 class="main_logo fl-left font-zero">
                            <a href="<?= HOME; ?>" title="3sviagens" class="radius">
                                3sviagens
                            </a>
                        </h2>

                        <!------------------------------------------------------ MENU MOBI ------------------------------------------>
                        <div class="sidebar">                            
                            <ul class="menu_mobile"> 
                                <li><a title="Home" href="<?= HOME; ?>">Home</a></li>
                                <li><a title="Quem Somos" href="<?= HOME; ?>/quem-somos">Quem Somos</a></li>
                                <li><a title="Pacotes" href="<?= HOME; ?>/pacotes">Pacotes</a></li>
                                <li><a title="Pacotes" href="<?= HOME; ?>/blog">Blog</a></li>
                                <li><a title="Fale Conosco" href="<?= HOME; ?>/contato">Contato</a></li>
                            </ul>
                            <button class="sidebarBtn">
                                <span></span>
                            </button>
                        </div>

                        <!------------------------------------------------------ MENU SITE ------------------------------------------>

                        <div class="main_menu">
                            <ul class="navbar">
                                <li><a title="home" href="<?= HOME; ?>">Home</a></li>
                                <li><a title="Quem Somos" href="<?= HOME; ?>/quem-somos">Quem Somos</a></li>
                                <li><a title="Pacotes" href="<?= HOME; ?>/pacotes">Pacotes</a></li>
                                <li><a title="Pacotes" href="<?= HOME; ?>/blog">Blog</a></li>
                                <li><a title="Fale Conosco" href="<?= HOME; ?>/contato">Contato</a></li>
                            </ul>

                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clear"></div>
            </header>

            <!-- --------------------------------- conteudo ---------------------------- -->
            <?php
            $Url[1] = (empty($Url[1]) ? null : $Url[1]);
            if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '.php';
            elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
            else:
                require REQUIRE_PATH . '/404.php';
            endif;
            ?>
            <!-- --------------------------------- conteudo ---------------------------- -->       

            <!--ONDE ESTAMOS -->
            <div class="container sec-onde">


                <div class="sec-row">
                    <h1>3sviagens</h1>
                    <p>QNM 34 ÁREA ESPECIAL 1, SALA 511 - JK SHOPPING CEP: 72145-450</p>
                </div>
                <div class="sec-row">
                    <h1>Onde Estamos</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15355.569041400724!2d-48.0937516!3d-15.809634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc44eda07a6e73937!2sJK+Shopping!5e0!3m2!1spt-BR!2sbr!4v1527264579694" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="sec-row">
                    <h1>Novo Endereço</h1>
                    <p>AVENIDA HÉLIO PRATES</p>
                    <p>QNM 34 ÁREA ESPECIAL 1, SALA 511 - JK SHOPPING CEP: 72145-450</p>

                    <h1>Newsletter</h1>
                    <form action="https://integracao.nitronews.com.br/integracao.php" method="post">
                        <div class="row">
                            <div class="column column-12">
                                <label>                                        
                                    <input type="text" name="nome" placeholder="Informe o Nome:"/>
                                </label>

                                <label>                                        
                                    <input type="email" name="email" placeholder="email@dominio.com" />
                                </label>
                                <input type="hidden" name="acao" value="1" />
<input type="hidden" name="chave" value="421344f67c34e8083e7fcfe1508e35194100d721615b684" />
<input type="hidden" name="urlretorno" value="https://3sviagens.com.br" />

<!-- caso sua página não seja em UTF-8, remova a linha abaixo -->
<input type="hidden" name="decodifica_utf8" value="1" />

                                <input type="submit" class="btn_roxo btn btn-roxo" name="enviar" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sec-row">
                    <h1>Telefones</h1>
                   <p> (61)  3336-7914</p>
                    <p>(61)  3336-5639</p>
                    <p>(61)  9601-8697</p>
                    <p>(61)  99601-8697</p>
                    <p>(61)  98117-0210</p>

                </div>

                <div class="clear"></div>
            </div>

            <div class="clear"></div>
        </main>

        <div class="container">
            <div class="content">
                <div class="footer-3s">
                    ©<?php echo date('Y'); ?> 3sviagens - Todos os direitos reservados | <a target="_blank" href="https://www.inovepublicidade.com/novo">Quem faz: Inove Publicidade</a>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <script src="<?= INCLUDE_PATH; ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/fontawesome.js"></script>          
        <script src="<?= INCLUDE_PATH; ?>/js/scriptSite.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/loadPost.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/slider_show.js" ></script>
                

    </body>
</html>
