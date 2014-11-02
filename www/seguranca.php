/*********************************
Autor: Fernando Krein Pinheiro
Data: 21/08/2011
Linguagem: PHP
========= IMPORTANTE ===========
O código esta livre para usar,
citar e compartilhar desde que
mantida sua fonte e seu autor.
Obrigado.
********************************/
<?php
 
    define( 'SENHA_DESBLOQUEIO' , 3575 );
    define( 'SENHA_CORRETA' , 1);
    define( 'BLOQUEAR' ,143.25 );
 
    $senha = $_POST['txtSenha'];
    $contador = 1;
 
    if($senha == SENHA_DESBLOQUEIO)
    {
        
       
        $porta = fopen("COM3","w");
        if(!$porta)
        {
            echo "ERRO: A porta serial nao pode ser aberta!
                  Verifique as permissoes da porta";
        }
        else
            fwrite($porta,SENHA_CORRETA);
            echo "O sistema foi destravado
                  e o acesso foi permitido";
        fclose($porta);
    }
    else
        echo "ERRO: Senha INCORRETA";
 
    if($senha == BLOQUEAR)
    {
        $porta = fopen("COM3", "w");
        if(!$porta)
        {
            echo "ERRO: A porta serial nao pode ser aberta!
                  Verifique as permissoes da porta";
        }
        else
            fwrite($porta,BLOQUEAR);
 
    }
    fclose($porta);
 
?>