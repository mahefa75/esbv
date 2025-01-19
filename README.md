# ESBV - Site Web en Construction

Un site web simple construit avec Symfony 6, comprenant une page d'accueil "En Construction" et une interface d'administration.

## TODO

### Gestion des Catégories et Attributs
1. **Création des entités**
   - Entité `Attribute`
     - Relation ManyToOne avec Category
     - Champs : nom, type, requis, etc.
   - Entité `Option`
     - Relation ManyToOne avec Attribute
     - Champs : valeur, ordre, etc.

2. **Interface de création des catégories**
   - Ajout du bouton "Nouvelle catégorie" dans l'en-tête de la liste
   - Formulaire de création avec :
     - Informations de base (nom, description, statut, image)
     - Section pour les attributs
     - Gestion dynamique des options pour chaque attribut
   - Upload et gestion des images dans `/public/uploads/image/categories`

3. **Gestion des attributs et options**
   - Interface d'ajout/suppression d'attributs pour une catégorie
   - Formulaire dynamique pour les options des attributs
   - Validation des données
   - Prévisualisation des attributs/options

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

### Organisation des templates
- Les templates sont organisés par section (admin, front)
- Chaque section a son propre layout de base
- Pour l'admin, utiliser `admin/dashboard.html.twig` comme template parent
- Les templates spécifiques doivent être placés dans des sous-dossiers correspondant à leur entité

### Organisation des assets
- Les styles CSS sont séparés par section et fonctionnalité
- Structure des assets :
  ```
  public/assets/
  ├── css/
  │   ├── admin/
  │   │   ├── category.css    # Styles spécifiques aux catégories
  │   │   └── ...            # Autres styles spécifiques
  │   ├── admin.css          # Styles généraux admin
  │   └── main.css           # Styles généraux du site
  ```

## Conventions de style

### Tables administratives
- Utiliser la structure suivante pour les tableaux :
  ```html
  <div class="card">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table">
                  <!-- Contenu -->
              </table>
          </div>
      </div>
  </div>
  ```
- L'en-tête doit être fixe avec `position: sticky`
- Hauteur de tableau adaptative avec `calc(100vh - XXpx)`
- Cellules de statut centrées avec icônes

### Composants CSS
1. **Cards**
   - Pas de bordure (`border: none`)
   - Utiliser des marges cohérentes
   - Structure flex pour le contenu

2. **En-têtes de section**
   - Classe `.categories-header` (ou équivalent pour autres sections)
   - Flexbox pour l'alignement
   - Marges standardisées

3. **Tableaux**
   - En-têtes fixes avec fond clair
   - Colonnes de statut centrées et de largeur fixe
   - Hover sur les lignes
   - Scrolling vertical fluide

4. **Icônes de statut**
   - Taille : 1.25rem
   - Animation au hover
   - Couleurs :
     - Actif : #4CAF50
     - Inactif : classe `text-danger`

### Conventions générales
- Utiliser des classes BEM
- Préfixer les classes spécifiques avec le nom de la section
- Maintenir une hiérarchie cohérente dans les CSS
- Utiliser des variables CSS pour les couleurs récurrentes
- Privilégier les unités relatives (rem, em) sur les pixels
- Assurer la compatibilité avec les écrans de différentes tailles

## Dépendances
- Font Awesome 6.5.1 pour les icônes
- Bootstrap pour la grille et les composants de base
- Symfony 6.x comme framework PHP

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails. 