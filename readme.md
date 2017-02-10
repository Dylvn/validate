<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

Nom de compte : admin@admin.fr
mot de passe : admin1234

# Filmosaure

__Mon message :__

Pourquoi je n'ai pas utilisé Bootstrap ?
_J'avais d'apprendre une autre librairie, qui peut être facilement surcharger et avoir quelque difficulté suplémentaire_

Pourquoi il n'y as qu'un seul compte ?
_Je me suis un peu inspiré de wordpress et ici avoir un compte ne donner pas vraiment d'autre possibilité_

Les plus d'aprés moi :
- _Ma gestion des mails ou dés qu'un mail est lu, il est enlevé des messages non lu. on peut d'ailleurs le remettre en "non lu" et inversement_
- _Ma gestion des erreurs, que j'ai essayé de poussé le plus possible_
- _La pagination des films, avec une image mise si il n'y as pas d'image_
- _Mon css avec trés peu de lignes (83, sachant qu'il y as beaucoup d'espace)_
    - C'est un point fort pourquoi ? _Trés facile de changer les couleurs, les images, etc. Le responsive est a 95% geré grâce a Foundation, c'est donc un "choix" de ne pas avoir mis des centaine de balise et faire un site assez sobre, qui peut être changer facilement_

### j'éspere ne rien avoir oublié 

## Fonctionnalités

- Gestions des erreurs
    - Gestion des erreurs formulaire ( Html, JavaScript, PHP )
    - Gestion des erreurs CSRF
    - Redirection sur la page de connexion quand on essaie d'accéder a une page only Admin
    - messages flash si reussites
- Fonctionnalités Laravel utilisé ( pas assez d'ailleurs )
    - Pagination
      ```php 
      $models = App\Model::paginate($NbElementParPage);
      {{ $models->links(['template']) }}
      ```
    - Message flash 
      ```php
      session()->flash($key, $value);
      {{ session($key) }}
      ```
    - Derniere valeur entrée dans un formulaire
      ```php
      old('title')
      ```
    - Mise au pluriel automatique
      ```php
      str_plural('Evenement', $event->count())
      ```
    - Création de slug
      ```php
      str_slug("elle était bla'bla", '_'); // Va donner "elle_etait_blabla"
      ```
- Tout est responsive
- utilisation de JavaScript pour les images de films pas trouvé
- J'ai essayé d'utiliser REST le plus possible
- gestion des pages sur lesquel on se trouve
- Impossibilité de recréer un compte (Admin ou pas)

## librairie utilisé

- [Foundation](http://foundation.zurb.com/sites/docs/)
    - Estétique, facilement surchargeable par rapport a Bootstrap

## La BDD

- Six tables :
    - users
    - password_resets
    - mails
        - name (varchar45) - email varchar(45) - content (mediumtext) - lu (int, default : 0)
    - films
        - name (varchar45) - img (varchar45) - synopsis (mediumtext) - realisateur (varchar45)
    - categories
        - name (varcahr45)
    - categorie_film
        - categorie_id (int) - film_id (int)
- Les possibilités de l'application avec la BDD
    - Utilisateur simples
        - Envoyer un(des) mail(s)
        - Voir les produits
        - ne peuvent pas se créer de compte (un seul compte, wordpress like)
    - Admin
        - Créer des films
        - Modifier des films
        - Supprimer des films
        - Regarder les mails ( Avec une fonction lu/non lu automatique, ou pas)


