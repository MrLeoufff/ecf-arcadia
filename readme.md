Projet Juasikarcadia

Un site pour un zoo fictif situé en Bretagne.
Démarrage

Ces instructions vous aideront à obtenir une copie du projet fonctionnant sur votre machine locale pour le développement et les tests. Consultez la section de déploiement pour savoir comment déployer le projet sur un système en direct.
Prérequis

    PHP 8.3 ou supérieur
    Symfony CLI 5.7 ou supérieur
    Symfony 7.0.5 ou supérieur
    MySQL
    NoSQL
    MongoDB 7.0.6
    VSCode
    Git

Installation

Un guide pas à pas pour créer un environnement de développement fonctionnel.
Installer Git

Windows

Installer Scoop

    powershell

    Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
    Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression

Installer Git

    powershell

    scoop install git

Installer Symfony CLI

    powershell

    scoop install symfony-cli

Vérifier l'installation

    bash

    symfony check:requirements -v

Cloner le dépôt

Créez un nouveau dossier et naviguez-y à l'aide d'un terminal :

    bash

    mkdir ecf-arcadia
    cd ecf-arcadia

Clonez le dépôt :

    bash

    git clone https://github.com/MrLeoufff/ecf-arcadia.git

Configurer les variables d'environnement

Naviguez dans le dossier Arcadia et créez un fichier nommé .env.local :

    bash

    cd Arcadia

Créez le fichier .env.local :

Windows PowerShell :

    powershell

    ni .env.local

Linux :

    bash

    touch .env.local

Ajoutez les variables d'environnement dans .env.local :

    env

    DATABASE_URL="mysql://root@127.0.0.1:3306/arcadia_db?serverVersion=10.11.2-MariaDB&charset=utf8mb4"
    MAILER_DSN= [INSÉREZ VOTRE CLÉ API ICI]
    MONGODB_URL=mongodb://localhost:27017

Installer les dépendances avec Composer

Naviguez dans le dossier 'Arcadia' avec un terminal :

    bash

    cd Arcadia

Installez les dépendances :

    bash

    composer install

L'installation peut prendre plusieurs minutes.

Créer et remplir la base de données

Nous allons :

    Créer la base de données.
    Insérer des comptes utilisateurs dans la base de données.
    Ajouter d'autres données dans la base de données.
    Il est important de suivre ces étapes dans l'ordre.

Créer la base de données

Un fichier SQL pour créer la base de données et les tables est disponible dans le dossier Documentation/SQL. Naviguez-y depuis le dossier Arcadia :

    bash

    cd Documentation/SQL

Créez la base de données en utilisant le fichier SQL :

Connectez-vous à MySQL :

    bash

    mysql -u votreUsername -p

Utilisez le fichier SQL :

    sql

source creation_db.sql

Quittez MySQL et revenez au dossier Arcadia :

    bash

        cd ../../

Créer les comptes utilisateurs

Chargez les fixtures :
Naviguez dans le dossier Arcadia avec un terminal et exécutez la commande suivante (n'oubliez pas le --append) :

        bash

        symfony console doctrine:fixtures:load --append

Ajouter des données

Naviguez dans le dossier SQL :

    bash

    cd Documentation/SQL

Ouvrez MySQL :

    bash

    mysql -u votreUsername -p

Utilisez le fichier insert_data.sql pour ajouter des données :

    sql

    source insert_data.sql

Votre base de données est maintenant configurée avec les différentes tables et données nécessaires. Des comptes utilisateurs ont également été créés pour tester le site avec différents rôles.

En suivant ces instructions, vous devriez avoir un environnement de développement fonctionnel pour le projet Arcadia. N'hésitez pas à adapter les configurations selon vos besoins spécifiques.