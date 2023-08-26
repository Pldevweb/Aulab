# Aulab

### CLI utile

- git clone -b Phase-de-test-1 https://github.com/Pldevweb/Aulab.git
- git clone -b Danyka https://github.com/Pldevweb/Aulab.git
- git clone -b Pier-Luc https://github.com/Pldevweb/Aulab.git
- git clone -b main https://github.com/Pldevweb/Aulab.git

---

## 18 Août 2023
- Installation de TALL Stack avec authentification :
    - composer require livewire/livewire laravel-frontend-presets/tall
    - php artisan ui tall --auth
    - npm install
    - npm run dev
- Création des tables suivantes SANS les foreign keys : carts (paniers), cart_products (panier lignes/préparation de facture), articles (articles de blog), comments (commentaires de blog).
- Modification de la table users pour ajouter : address, city, zipcode, country et profile_photo.

---

## 19 Août 2023
### V 1.0 

- Composer update
- layout.app.blade commencé
    - routing
    - navbar
- Views  
---

## 26 Août 2023
### V 1.1 

- Various bug fix
    - now running command php artisans migrate --seed  will automatically migrate and seed database with fake data
    - component footer categories correctly display accross all views

- Views
    - about done (lorem ipsum)
---
