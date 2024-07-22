# Déploiement de l'application Symfony avec Docker

Ce guide vous aidera à déployer mon application Symfony en local en utilisant Docker.

## Prérequis

Assurez-vous d'avoir les éléments suivants installés sur votre machine :

- Git
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

