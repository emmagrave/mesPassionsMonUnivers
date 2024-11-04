# Mes Passions, Mon Univers
Bienvenue dans Mes Passions, Mon Univers ! Ce projet est un site web de blog personnel, conçu pour partager des passions, des découvertes littéraires, des créations artistiques, et plus encore. 

## Présentation

## Fonctionnalités
- **Affichage des articles** : Présentation des articles avec titre, auteur, catégorie, et image.
- **Section À Propo** : Introduction de l'auteur et description de son univers.
- **Barre latérale** : Articles récents et lien vers les réseaux sociaux.
- **Moteur de recherche** : Champ de recherche pour faciliter la navigation.

## Installation
1. Clonez le dépôt :
```bash
git clone https://github.com/votreutilisateur/nom-du-repo.git
cd nom-du-repo
```

2. Installez les dépendances : Assurez-vous d'avoir Node.js et Composer installés.
```bash
composer install
npm install
```

3. Compilez les assets :
```bash
npm run dev
```

## Configuration

1. Fichier d'environnement : Copiez .env.example en .env et configurez les variables d'environnement nécessaires (base de données, clé API, etc.).
```bash
cp .env.example .env
php artisan key:generate
```

2. Base de données : Configurez et migrez les tables.
```bash
php artisan migrate
```

3. Images et assets : Placez les images de profil et autres fichiers dans le dossier public approprié (/public/images/).

## Utilisation
```bash
php artisan serve
```
Le site sera accessible à http://localhost:8000

## Structure des Fichiers
- resources/views/ : Contient les templates Blade pour les différentes pages.
- resources/css/app.css : Fichier CSS principal avec les styles personnalisés.
- public/images/ : Emplacement des images utilisées sur le site, incluant les images de profil.
- routes/web.php : Fichier de définition des routes.