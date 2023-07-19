
<?php
/**
 * @Route("/mon_script", name="mon_script_route")
 */
public function monScript() {
// Assurez-vous que l'objet $user est défini et a une méthode getRoles()
// Par exemple, supposons que $user soit un objet de la classe User qui a une méthode getRoles()

// Récupérer les rôles de l'utilisateur
$roles = $user->getRoles();

// Vérifier si le premier rôle est 'ROLE_WORKER'
if ($roles[0] == 'ROLE_USER') {
    // Code à exécuter si le premier rôle est 'ROLE_WORKER'
    // par exemple :
    echo "L'utilisateur a le rôle 'ROLE_USER'.";
    // etc...
} else {
    // Code à exécuter si le premier rôle n'est pas 'ROLE_WORKER'
    // par exemple :
    echo "L'utilisateur n'a pas le rôle 'ROLE_ADMIN'.";
    // etc...
}
}