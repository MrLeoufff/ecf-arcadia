🌌 ECF Arcadia

Bienvenue sur le dépôt du projet ECF Arcadia, une application web réalisée dans le cadre de l'examen de fin de formation DWWM (Développeur Web et Web Mobile). Ce projet est une vitrine de mes compétences en développement web, mettant en avant des fonctionnalités robustes et un design moderne.
📋 Table des matières

    À propos
    Fonctionnalités
    Technologies utilisées
    Installation
    Usage
    Contributions
    Contact

🎯 À propos

ECF Arcadia est un projet de démonstration qui propose une plateforme immersive où les utilisateurs peuvent explorer des fonctionnalités liées à la gestion d'articles, catégories et utilisateurs, tout en découvrant un univers pensé pour les amateurs de personnalisation et de contenu numérique.

L'objectif est de créer une expérience utilisateur fluide et moderne tout en démontrant la maîtrise de Symfony pour le développement back-end et de Bootstrap pour la mise en forme des interfaces.
✨ Fonctionnalités

    Gestion des catégories :
        Ajout, modification, suppression et affichage des catégories.
    Gestion des articles :
        Création, modification et suppression d'articles associés à des catégories.
    Gestion des utilisateurs :
        Rôles multiples : Admin, Utilisateur, Visiteur.
        Accès différencié en fonction du rôle.
    Système d'authentification sécurisé :
        Inscription, connexion, réinitialisation de mot de passe.
    Expérience utilisateur fluide :
        Interface responsive grâce à Bootstrap.
        Navigation intuitive.

🛠️ Technologies utilisées

    Back-end : Symfony (version 6.x)
    Base de données : MySQL
    Front-end : HTML5, CSS3, Bootstrap 5, JavaScript
    Versionnement : Git & GitHub
    Environnement de développement : Composer, Symfony CLI

🚀 Installation
Prérequis

    PHP 8.1 ou supérieur
    Composer
    Symfony CLI
    Serveur web (Nginx ou Apache)
    MySQL ou MariaDB

Étapes

    Cloner le dépôt :

git clone https://github.com/MrLeoufff/ecf-arcadia.git
cd ecf-arcadia

Installer les dépendances :

composer install
npm install
npm run build

Configurer les variables d'environnement : Copier le fichier .env en .env.local et adapter les valeurs (base de données, mailer, etc.).

cp .env .env.local

Créer la base de données et effectuer les migrations :

symfony console doctrine:database:create
symfony console doctrine:migrations:migrate

Lancer le serveur local :

    symfony server:start

L'application sera accessible sur http://127.0.0.1:8000.
📖 Usage

    Connectez-vous avec un compte admin pour gérer les catégories et articles.
    Explorez les différentes fonctionnalités accessibles selon le rôle utilisateur.
    Profitez d'une expérience intuitive grâce au design responsive.

🤝 Contributions

Les contributions sont les bienvenues ! Si vous souhaitez améliorer ce projet, suivez les étapes suivantes :

    Forkez le dépôt.
    Créez une branche pour votre fonctionnalité :

    git checkout -b ma-nouvelle-fonctionnalite

    Apportez vos modifications.
    Soumettez une Pull Request.

📬 Contact

Pour toute question ou suggestion, n'hésitez pas à me contacter :

    Nom : René Leliard
    Email : mrleoufff@gmail.com
    Portfolio : Portfolio René Leliard

Merci d'avoir exploré ECF Arcadia ! ✨

# Déploiement de l'application Symfony avec Docker

Ce guide vous aidera à déployer mon application Symfony en local en utilisant Docker.

## Prérequis

Assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [Git](https://git-srm.com/download)
- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Structure du projet

Mon projet contiens les fichiers suivants à la racine :

- `docker-compose.yml`
- `Dockerfile`
- 'build'
  - `supervisord.conf`
    - 'nginx'
      - 'conf'
        - `default.conf`
    - 'php'
      - `custom.ini`
- `.env`
- `README.md` (ce fichier)

## Cloner mon dépôt

- Ouvrez un terminal (Tabby est vraiment génial):
- Clonez mon dépôt Git [Github](https://github.com/MrLeoufff/ecf-arcadia)
- ```git clone mon-dépôt git```
- ```cd ecf-arcadia```

## Déploiement de l'app en local

- Toujours dans le terminal
- ```docker-compose up -d --build```

## Accédez à l'application

- Dans un navigateur de votre choix :
- [url](http://localhost:9000)

## Identifiants

- Consulter la copie ECF

##  Arrêt les conteneurs

- Toujours dans le terminal
- ```docker-compose down```

Voila voila. 

## Remerciement 
- Seb
- Capt'
- Exploris
- Wivine
- Nico<br>
Et bien d'autre encore ...

