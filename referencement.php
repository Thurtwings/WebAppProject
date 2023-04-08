<?php
if (!isset($_GET['page'])) $_GET['page'] = 'accueil';
switch ($_GET['page']) {
    case 'accueil':
        $title = 'Accueil';
    case 'UpdateProfile':
        $title = 'Modification profile';
    default:
        $title = 'Erreur';
        break;
}

?>