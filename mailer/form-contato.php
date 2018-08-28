<?php
require_once('./mailer/class.phpmailer.php');

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):
    $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    $telefone = utf8_decode(strip_tags(trim($_POST['txtfone'])));
    $pessoas = utf8_decode(strip_tags(trim($_POST['pessoas'])));
    $mensagem = html_entity_decode(filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING));

    try {
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet = utf8_decode($mensagem);
        $mailer->Host = 'mail.3sviagens.com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@3sviagens.com.br';
        $mailer->Password = 'contato';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddAddress('contato@3sviagens.com.br', '3sviagens');        
        $mailer->AddAddress('contato3sviagens@gmail.com', '3sviagens');
        $mailer->Subject = "Formulario Contato"; //Assunto do e-mail      
        $mailer->isHTML(true);
        $mailer->Body .= "<br><br/> "
                . "Nome:  $nome <br><br/>"
                . "Email: $email <br><br/>"
                . "Telefone: $telefone <br><br/>"
                . "Telefone: $pessoas <br><br/>"
                . "Mensagem: $mensagem <br><br/>";

        //Define o corpo do email        
        $mailer->Send();
        echo "<script>alert('Sr(a) $nome sua mensagem foi enviada com sucesso! Em breve entraremos em contato!');</script>";
        echo "<script>window.location = 'http://3sviagens.com.br/contato'</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
endif;
?> 
<div class="error">
    <p class="error" style="display: none;">Campo invalido</p>
</div>

<form class="form_contato" id="form_contato" name="form" method="POST" action="">
    <label for="nome">NOME*</label>
    <input type="text" name="txtnome" id="nome" class="nome" required="">
    <label for="email">EMAIL*</label>
    <input type="email" name="txtemail" class="email" id="email" required="">
    <label for="telefone">TELEFONE*</label>
    <input type="tel" name="txtfone" id="telefone" class="telefone" required="">                                
    <label for="qtdPessoas">Qtd. Pessoas*</label>
    <input type="text" name="pessoas" id="qtdPessoas" class="qtdPessoas" required="">
    <label for="observacao">Observações*</label>
    <textarea rows="3" name="txtmsg" id="observacao" required=""></textarea>
    Enviar Mensagem
    <input type="submit" name="btnEnviar" class="enviar" onclick="return validar()" value="ENVIAR">
</form>