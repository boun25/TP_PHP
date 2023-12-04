<?php
foreach($_POST as $name=>$value){
    echo $name. ''.$value.'<br>';
}
var_dump($_POST). '<br>';

?>

<?php
foreach($_POST as $name =>$value){ echo $name.' '.$value. '<br>';

$f= fopen("sauvegarde.txt","a"); 
fwrite($f, $_POST['prenom']. "\n"); 
 fwrite($f, $_POST['nom'] . "\n"); 
 fwrite($f, $_POST['adresse'] ."\n"); 
 fwrite($f, $_POST['ville']."\n");
 fwrite($f, $_POST['cp']."\n");
$f= fclodse($f);
}

?>
