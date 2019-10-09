<?php



if (isset($_POST['nome_completo'])) {
    echo "\n<h1>Envio de dados método<em>POST</em></h1>";
    echo "\n<pre>\n";
    print_r($_POST); 
    echo "\n<pre>\n";

    print("\n<br><strong>Nome Completo: </strong>");
    print("$_POST[nome_completo]");

    print("\n<br><strong>E-mail: </strong>");
    print("$_POST[email]");

    print("\n<br><strong>Data de Aniversário: </strong>");
    print("$_POST[data_de_aniversario]");

    print("\n<br><strong>Perfil do Facebook: </strong>");
    print("$_POST[perfil_do_facebook]");

    print("\n<br><strong>Imagem: </strong>");
    print("$_POST[url_imagem]");
}