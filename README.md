# BNB

## INSTALLATION SYMFONY

```
cd chemin_vers_le_dossier_htdocs/www
```
```
composer create-project symfony/website-skeleton nom_du_projet
```

## GIT / GITHUB

### Initialiser le projet (au dépôt)

Initialiser un dépôt :
```
git init
```
Relier au dépôt distant (GitHub) :
```
git remote add origin https://lien_vers_le_dépôt_GitHub
```

### Ajouter des nouveaux fichiers

Ajouter les fichiers :
```
git add *
```
Nommer le commit :
```
git commit -m "le_nom_du_commit_ici"
```
Envoyer les fichiers :
```
git push origin master
```

## APACHE-PACK

- barre de débug / routing :
```
composer require symfony/apache-pack
```

## BASE DE DONNÉES

- dans le fichier .env :
DATABASE_URL=mysql://identifiant:mot_de_passe@127.0.0.1:3306/nom_de_la_base?serverVersion=5.7

- créer la base :
```
php bin/console doctrine:database:create
```

- créer une table (entité) :
```
php bin/console make:entity
```

- on vérifie le(s) fichier(s) créé(s)

- migration :
```
php bin/console make:migration
```
```
php bin/console doctrine:migrations:migrate
```

- ajouter une colonne à une table :
```
php bin/console make:entity
```
(puis mettre le nom d'une table exitante)

## FIXTURES

- installer le package :
```
composer require --dev orm-fixtures
```

- remplir le fichier src/DataFixtures/AppFixtures.php

- charger les données en bdd en purgeant la base :
```
php bin/console doctrine:fixtures:load
```

- charger les données en bdd à la suite :
```
php bin/console doctrine:fixtures:load --append
```

- quand on en a terminé avec les fixtures, renommer le fichier utilisé (en ajoutant ~devant)

## CRÉER UN CONTRÔLEUR

```
php bin/console make:controller
```

## VIDER LE CACHE

```
php bin/console cache:clear
```

## AFFICHER LES ROUTES

```
php bin/console debug:router
```

## VARIABLES GLOBALES

- fichier config/packages/twig.yaml :
```
twig:
    ...
    globals:
        copyright: '%app.copyright%'
```

- fichier config/services.yaml :
```
parameters:
    app.copyright: 'Copyright &copy; 2020 | BNB'
```

- utilisation (dans les templates) :
```
{{ copyright|raw }}
```

## FORMULAIRES

```
composer require symfony/form
```
```
php bin/console make:form
```

- entrer le nom du formulaire
- entrer le nom de la classe associée

- thème Bootstrap pour les formulaires : dans config/packages/twig.yaml, ajouter :
```
form_themes: ['bootstrap_4_layout.html.twig']
```
