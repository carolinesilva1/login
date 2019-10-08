<?php

    
// Teste a ação 
if(isset ($_POST['action'])){
    if($_POST['action'] == 'cadastro'){
//Teste se a ação é cadastro
echo "\n<p> cadastro</p>";
echo "\n<pre>";
print_r ($_POST);
echo "\n</pre>";

}else if($_POST['action'] == 'login'){
        //Senão teste se ação é login

        echo "\n<p>login</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

}else if ($_POST['action'] == 'senha'){
        //Senão teste se a açaõ é recuperar senha

        echo "\n<p>senha</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
}else{
        header("location:index.php");
}


}else{
    //Redirecionando para index.php. negando o acesso
    // a esse arquivo diretamente
    header("location:index.php");
}