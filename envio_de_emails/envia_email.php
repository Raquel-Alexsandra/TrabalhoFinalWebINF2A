<?php

$conteudo_email = 
"
<!DOCTYPE html>
<!-- HTML geral para páginas que sejam do tipo formulários -->
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Manutenção Acervo</title>
        <link rel=\"stylesheet\" href=\"email.css\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito&display=swap\" rel=\"stylesheet\">
    </head>
    <style>
    /* CSS para estilizar páginas do tipo Formulário - Biblioteca */
        html, body{
            margin: 0%;
        }
        header, footer{
            height: 5%;
            background-color: #264553;
            padding: 3%;
        }

        h1, h3, p, input{
            font-family: 'Nunito', sans-serif;
            color: white;
            margin: 0%;
        }

        h1{
            font-size: 1em;
            text-align: center;
            margin-top: 2%;
        }

        h3{
            text-align: center;
            font-size: 0.7em;
        }

        .sub, .msg{
            color: #449d8f;
            margin: 5% 0% .5% 0%;
            font-size: 1em;
        }

        .principal{
            color: #e76f51;
            font-size: 1.5em;
            margin: 0% 0% .5% 0%;
        }

        .descricao{
            color: #264553;
            font-size: 1em;
            margin: 0% auto 1% auto;
            width: 60vw;
        }

        .descricao, .principal, .subRosa{
            text-align: center;
        }

        #ajuste{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1% 0% 5% 0%;
        }
        form{
            display: block;

        }

        #botoes{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .botoes{
            width: 49.5%;
            height: 4vh;
            border-radius: .3em;
            border: 0;
            background-color: #e76f51;
            color: white;
            transition: .3s ease;
            
        }
        .botoes:hover{
            background-color: #449d8f;
            cursor:pointer
            
        }

        input{
            color:#449d8f;
            display: inline-block;
        }



        .texto{
            width: 30vw;
            border: 0;
            outline: none;
            border-bottom: 1.5px solid #449d8f ;
            display: block;
            margin: 0% 0% 5% 0%;
        }

        textarea{
            width: 100%;
            height: 10vh;
            padding: 3%;
            background-color: #449d8f;
            color: white;
            border: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
        textarea::placeholder{
            color: white;
        }

        .msg{
            margin: 1% 0% 5% 0%;
        }
        #logo{
            display: block;
            width: 20vh;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <body>
        <header>
            <img src=\"imgs/LogoExemplo.png\" alt=\"logo\" id=\"logo\">
            <h1>Sistema de Biblioteca</h1>
        </header>
        <main>
            <h3 class=\"sub\">Infelizmente as notícias não são boas :(</h3>
            <h1 class=\"principal\">Sua Reserva foi cancelada</h1>
            <p class=\"descricao\">Olá [nome da pessoa]! Este email foi enviado para informá-lo(a) que sua Reserva
                do livro [nome do livro reservado] foi cancelada devido à exclusão do mesmo de  nosso acervo literário. 
                Nos desculpamos pelo incoveniente e o/a convidamos para reservar outra obra existente em nossa biblioteca. 
                
                Atenciosamente, 
                Equipe [nome do sistema]. 
                
            </p>
            <h3 class=\"msg\">Este email foi enviado automáticamente, favor não responder. </h3>

            </div>
        </main>
        <footer>
            <h3>Orgulhosamente criado pela turma de Informática 2A de ingresso em 2019©</h3>
            <h3>Agradeçemos pela preferência</h3>
        </footer>

    </body>
</html>
";

//Destinatário
$lista_destinatarios = "contatobelaaa@gmail.com";
$destinatarios = $lista_destinatarios;
$assunto = "Cancelamento de Reserva";

//Indicar que o email enviado é uma página HTML

$headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: Izabela <contatobelaaa@gmail.com>';

$envio = mail($destinatarios, $assunto, $conteudo_email, $headers);

if($envio){
    $status = "Email enviado com sucesso";
}else{
    $status="Problema ao Enviar o email";
}



?>