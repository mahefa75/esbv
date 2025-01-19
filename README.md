# ESBV - Site Web en Construction

Un site web simple construit avec Symfony 6, comprenant une page d'accueil "En Construction" et une interface d'administration.

## Fonctionnalités

- Page d'accueil avec animation SVG créative
- Interface d'administration sécurisée
- Design moderne et responsive

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI (recommandé)

## Installation

1. Cloner le projet
```bash
git clone https://github.com/mahefa75/esbv.git
cd esbv
```

2. Installer les dépendances
```bash
composer install
```

3. Configurer l'environnement
```bash
cp .env .env.local
```

4. Démarrer le serveur de développement
```bash
symfony server:start
# ou
php -S localhost:8000 -t public/
```

## Accès à l'administration

- URL : `/admin`
- Identifiant : `admin`
- Mot de passe : `admin`

## Structure du projet

```
esbv/
├── config/
├── public/
│   └── assets/
│       ├── css/
│       │   ├── main.css
│       │   ├── admin.css
│       │   └── construction.css
├── src/
│   └── Controller/
│       ├── FrontController.php
│       └── Admin/
│           └── AdminController.php
└── templates/
    ├── base.html.twig
    ├── main/
    │   └── index.html.twig
    └── admin/
        ├── login.html.twig
        └── dashboard.html.twig
```

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails. 