<?php
if (empty($_POST['title']) || empty($_POST['content'])) {  //si le titre n'est pas présent ou vide...
    http_response_code(400);
    header('Content-Type: text/plain');//on précise le type qu'on lui renvoie
    echo 'missing required parameters';
    //on lui dit tu quittes et tu mets le code d'erreur 1
    exit(1); //le 1 = indique une erreur => on indique une erreur nb 0 = reussite
}
echo $_POST['title'] . ' ' . $_POST['content'];
//exit(0);