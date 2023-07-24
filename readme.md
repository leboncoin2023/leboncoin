# Le Boncode

![lebon.png](/public/assets/images/lebon.png)
Adaptation d'une nouvelle  fonctionnalité du site le boncoin qui permet a l' utilisateur d' enchérir.

-----
### Outils utilisés : 

#### <u> Editeur de code </u>:
![icone1.png](/public/assets/images/icone1.png) *__VS Code__*
Visual Studio Code (VS Code) est un éditeur de code source gratuit et open-source développé par Microsoft

#### <u> Interface BDD </u>:
 ![compass.png](/public/assets/images/compass.png) *__MongoDB Compass__*
MongoDB Compass est une interface graphique conviviale et officielle fournie par MongoDB pour interagir avec les bases de données MongoDB. C'est un outil visuel destiné à faciliter la gestion et l'exploration des données stockées dans une base de données MongoDB, sans avoir besoin de connaître la syntaxe de la ligne de commande ou de travailler directement avec les requêtes MongoDB en JSON.

#### <u> Framework </u>: 
![icone2.png](/public/assets/images/icone2.png) *__Symfony__*
Symfony suit le modèle de conception du patron de conception MVC (Modèle-Vue-Contrôleur).Symfony est largement utilisé pour développer des applications web de toutes tailles, des petites applications aux projets d'entreprise complexes. 
Base de données : MongoDB est une base de données orientée documents de type NoSQL (Not Only SQL). C'est un système de gestion de base de données (SGBD) open-source conçu pour stocker et gérer de grandes quantités de données de manière flexible et évolutive.

#### <u> Base de données </u>:
![bdd.png](/public/assets/images/bdd.png)*__MangoDB__*
MongoDB est une base de données NoSQL (Not Only SQL) qui appartient à la famille des bases de données orientées documents. Contrairement aux bases de données relationnelles traditionnelles (SQL), MongoDB ne stocke pas les données dans des tables avec des lignes et des colonnes, mais utilise un format flexible et semi-structuré appelé BSON (Binary JSON) pour stocker les données sous forme de documents JSON

####  <u> language de développement </u>:
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
### <u> Déploiement du projet </u>
Installation de Symfony :
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

Faire la connexion avec la bdd mangoDB, dans le fichier .env

![env.png](/public/assets/images/env.png)

-----
Maintenant il es temps de créer les différentes routes du projet et de créer les controller. 
####  <u> Le HomeController </u>
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

1. #### AuctionController.php
2. #### CategoryController.php
3. #### RegistationController.php
4. #### SecurityController.php
5. #### UserController.php

---------
Il faudra faire aussi un formulaire pour enregistrer les enchères
#### <u> AuctionsType.php </u>: ![form.png](/public/assets/images/form.png) 
 il faudra ajouter les différents ' ->add ' et de bien choisir les type correspondant et vérifié que le Use s 'incrémente automatiquement sinon il faudra le rajouter.

 ```php
 Form/AuctionType.php

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
 Document/Auctions.php

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
Dans le fichier AuctionController , il faudra créer la route pour le rediriger ver le template twig

```php
 #[Route('/new_auction', name: 'app_auction_new_auction')]
    public function newAuction(Request $request, DocumentManager $documentManager): Response
    {
        $auction = new Auctions();
        $form = $this->createForm(AuctionType::class, $auction);
        $form->handleRequest($request);
             
        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                // Afficher les erreurs de validation du formulaire
                foreach ($form->getErrors(true, true) as $error) {
                    echo $error->getMessage()."\n";
                }
            } else {
                // Sauvegardez l'entité Auctions en base de données
                $documentManager->persist($auction);
                $documentManager->flush();

            return $this->redirectToRoute('app_auction_new_recap', ['id' => $id]);

            }
```
#### Pour le template auction/new_auction.html.twig
il faudra creer le formulaire en méthode POST. Lorsque le formulaire est soumis, les données du formulaire seront envoyées au serveur dans le corps de la requête HTTP.

```php
new_auction.html.twig

<form method="post" action="{{ path('app_auction_new_auction') }}" enctype="multipart/form-data">
            {{ form_start(form) }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ form_label(form.title) }}
                        {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                    </div>

```

il faudra ajouter cette ligne dans le formulaire {{ form_row(form._token) }}
 celle-ci est utilisée pour afficher un champ caché dans un formulaire Symfony qui contient le jeton CSRF (Cross-Site Request Forgery) pour protéger contre les attaques CSRF.

```twig
new_auction.html.twig

  <!-- En ajoutant cette ligne dans le formulaire, vous vous assurez que le jeton CSRF est inclus dans le formulaire
                         lorsqu'il est soumis. Cela garantit la sécurité de votre application en protégeant contre les attaques CSRF.  -->
                    {{ form_row(form._token) }}

```

#### Pour le template auction/index.html.twig
Création d' une boucle {% if auctions is empty %} 
    Une instruction conditionnelle qui vérifie si la variable "auctions" est vide (c'est-à-dire s'il n'y a pas d'enchères à afficher). Si "auctions" est vide, il affiche un paragraphe indiquant qu'il n'y a aucune enchère disponible.

```twig
new_auction.html.twig

     <div class="container">
        <h1 class="mt-5 mb-4">Liste des enchères</h1>

        {% if auctions is empty %}
            <p>Aucune enchère disponible pour le moment.</p>
        {% else %}
```
a l intérieur {% for auction in auctions %}
Une boucle "for" qui itère sur chaque élément de la variable "auctions" (qui doit être un tableau d'objets représentant les enchères).
 similaires affichent les détails de chaque enchère, tels que la description, le prix de départ, la catégorie, la date de début, etc. Les méthodes getDescription(), getStartPrice(), etc., sont appelées sur l'objet "auction" pour récupérer les valeurs correspondantes.
 ```twig
new_auction.html.twig
     {% for auction in auctions %}
                    <div class="col-md-6">
                        <div class="card mb-4 bg-orange text-black">
                            <div class="card-body">
                                <h2 class="card-title">{{ auction.getTitle() }}</h2>
                                <p class="card-text">Description : {{ auction.getDescription() }}</p>
                                <p class="card-text">Prix de départ : {{ auction.getStartPrice() }} €</p>
                                <p class="card-text">Catégorie : {{ auction.getCategory() }}</p>
                                <p class="card-text">Date de début : {{ auction.getStartDate()|date('Y-m-d H:i:s') }}</p>
                                <p class="card-text">Durée : {{ auction.getDuration() }} jours</p>
                                <p class="card-text">Sous-catégorie : {{ auction.getSubCategory() }}</p>
                                <p class="card-text">Prix de réserve : {{ auction.getReservePrice() }} €</p>
                                <p class="card-text">Prix de vente : {{ auction.getSoldPrice() }} €</p>
                                <p class="card-text">Mode de livraison : {{ auction.getDeliveryMode() }}</p>
                                <p class="card-text">Localisation : {{ auction.getLocalisation() }}</p>
                                <p class="card-text">Vendeur ID : {{ auction.getSellerId() }}</p>
                                <p class="card-text">Acheteur ID : {{ auction.getBuyerId() }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
```


Suite du readme.md à créer...........................




## Capture d' écran du site en projet.

### Page d 'acceuil du site

![site.png](/public/assets/images/site.png) 

### Page d' acceuil des encheres

![site1.png](/public/assets/images/site1.png) 

### Formulaire d' enregistrement d' une enchère

![site2.png](/public/assets/images/site2.png) 


### Récapitulatif d' une enchère

![site5.png](/public/assets/images/site5.png) 

### Page d' enregistrement du User

![site3.png](/public/assets/images/site3.png) 


### Page de login du User une fois créer

![site4.png](/public/assets/images/site4.png) 







     





