# Le Boncode

![lebon.png](/public/assets/images/lebon.png)
Adaptation d'une nouvelle  fonctionnalité du site le boncoin

-----
### Outils utilisés : 

#### Editeur de code :
![icone1.png](/public/assets/images/icone1.png) *__VS Code__*
Visual Studio Code (VS Code) est un éditeur de code source gratuit et open-source développé par Microsoft

#### Framework : 
![icone2.png](/public/assets/images/icone2.png) *__Symfony__*
Symfony suit le modèle de conception du patron de conception MVC (Modèle-Vue-Contrôleur).Symfony est largement utilisé pour développer des applications web de toutes tailles, des petites applications aux projets d'entreprise complexes. 
Base de données : MongoDB est une base de données orientée documents de type NoSQL (Not Only SQL). C'est un système de gestion de base de données (SGBD) open-source conçu pour stocker et gérer de grandes quantités de données de manière flexible et évolutive.

#### language de développement :
![icone3.png](/public/assets/images/icone3.png) *__HTML__* 
HTML (HyperText Markup Language) est le langage de balisage standard utilisé pour créer et structurer le contenu d'une page web. 

![icone4.png](/public/assets/images/icone4.png) *__CSS__* 
CSS (Cascading Style Sheets) est un langage de feuille de style utilisé pour contrôler la présentation et le style du contenu d'une page web écrite en HTML. Il s'agit d'un complément essentiel à HTML, car il permet de définir l'apparence visuelle des éléments HTML, tels que la couleur, la police, la mise en page, les marges, les bordures, les animations, etc.

 ![icone5.png](/public/assets/images/icone5.png)*__PHP__*  
PHP (PHP: Hypertext Preprocessor) est un langage de script côté serveur utilisé principalement pour le développement web.
PHP est largement utilisé dans le développement web pour créer des sites web dynamiques, des applications web, des blogs, des forums, des systèmes de gestion de contenu (CMS) comme WordPress, et bien plus encore.

![tw.png](/public/assets/images/tw.png)   *__Twig__* 
Twig est un moteur de template développé pour le framework Symfony, bien qu'il puisse également être utilisé de manière indépendante dans d'autres projets PHP. Il s'agit d'un langage de modèle conçu pour générer des vues dans les applications web. Twig permet de séparer la logique métier du rendu visuel, ce qui améliore la lisibilité et la maintenabilité du code.

![icone6.png](/public/assets/images/icone6.png) *__Javascript__* 
JavaScript est un langage de programmation côté client largement utilisé pour le développement web. Il est principalement utilisé pour ajouter de l'interactivité et de la dynamique aux pages web, permettant ainsi de créer des applications web interactives et réactives. JavaScript est pris en charge par tous les navigateurs modernes sans avoir besoin de plugins supplémentaires, ce qui en fait un choix essentiel pour le développement web.

-----
### Déploiement du projet 
Installation de Symfony
ouvrir le terminal , se mettre à la racine du projet et lancer la commande 
####composer create-project symfony/skeleton:"6.3.*" my_project_directory
![sym.png](/public/assets/images/sym.png)
installer les Bundles nécessaire dans le terminal avec " composer update
#### Il est nécessaire lors de toute récupération du projet de lancer la commande " composer update " .

![composer.png](/public/assets/images/composer.png)
Afin de pouvoir récuper les dernieres fonctionnalitées du projet.
Installer le package pour MongoDB

![mango.png](/public/assets/images/mango.png)

Lancer le serveur interne a Symfony, avec la commande 
![server.png](/public/assets/images/server.png) 

Cela lancera la page d' acceuil de Symfony dans le navigateur

![start.png](/public/assets/images/start.png)

-----
Maintenant il es temps de créer les différentes routes du projet et de créer les controller. 
#### Le HomeController 
Création d 'un HomeController avec l'invite de commande , il faut taper la commande  : symfony console make:controller HomeController

![controller.png](/public/assets/images/controller.png)
Cela créer automatiquement un nouveau fichier HomeController.php dans le répertoire src/Controller du projet Symfony.

![hc.png](/public/assets/images/hc.png)

```php
class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index_home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
```
En résumé, ce code définit un contrôleur HomeController avec une méthode index() qui répond à l'URL "/home" et rend le template "index_home.html.twig" en passant la valeur "HomeController" à la variable "controller_name" dans le template. Le template Twig peut utiliser cette valeur pour afficher des informations spécifiques dans la page générée.



Création d' un template twig associé au HomeController nomé  par défaut index.html.twig  dans le fichier templates/home.

![twig.png](/public/assets/images/twig.png)

La page Home a été créer , il faudra configurer le reste des controller pour les différents modèles à utiliser.

1. AuctionController.php
2. CategoryController.php
3. RegistationController.php
4. SecurityController.php
5. UserController.php

---------
Il faudra faire aussi un formulaire pour enregistrer les enchères
####AuctionsType.php:
 il faudra ajouter les différents ->add et de bien choisir les type correspondant 
 ```php
 Auctionstype

 use Symfony\Component\Form\Extension\Core\Type\TextareaType;
 use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

 ->add('description', TextareaType::class)

 ->add('category', ChoiceType::class, [
                'choices' => [
                    // Ajoutez d'autres catégories ici
                    'Catégorie 1' => 'categorie1',
                    'Catégorie 2' => 'categorie2',
                    'Catégorie 3' => 'categorie3',
                ],
            ])
 ```
Avec l 'utilisation de mangoDB il faudra créer le Document/Auctions.php
pour faire les getter et setter 

 ```php
 Auctions

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

// #[MongoDB\Document]
class Auctions
{ 

//#[MongoDB\Field(type:'string')]
private ?string $title = null;


   public function getTitle(): ?string
    {

        return $this->title;
    }
    public function setTitle(?string $title)
    {

        $this->title = $title;
        return $this;
    }
}
 ```





