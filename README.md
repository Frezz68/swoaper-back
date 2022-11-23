# Swoaper project

## Développeurs :

Ryan
Alan
Lucas

## Stacks :

Backend - Symfony

Frontend - Twig / Tailwind

## Guide d'installation pour le développement

### Installer la base du projet

  Cloner le dépôt depuis https://github.com/quentingrchr/walk-of-art.git vers le dossier de l'application
```bash
git clone https://github.com/quentingrchr/walk-of-art.git [my-app-name]
```

Aller ensuite au dossier de l'api de l'application
```bash
cd [my-app-name]\backend\app
```
Remplacer `[my-app-name]` avec le nom de dossier souhaité pour l'application.

### Installer le Docker

Utiliser cette commande pour installer l'environnement docker et directement le démarrer  
```bash
docker-compose up -d
```

### Installer les dépendances Composer dans la box swoaper-php ( en lançant le Cli )

```bash
composer install
```

### Installer les modules Node

Installer les modules
```bash
yarn install
```

Compiler les modules
```bash
yarn build
```
