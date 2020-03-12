# Formation PHP correction

## 1. template html / css principale vide 
template de l'index et du style.css avec ajout du link html <-- css  

## 2.a initialisation d'un dispatcher

inclusion conditionnelle en fonction de la valeur d'un champs $_GET['page']
    
- ### produits : pour une liste de produits
    chargement de : vues/produits/produits.php

- ### produit : pour un produit unique
    1. si $_GET['edit'] --> chargement de : vues/produits/produit.php
    2. si pas $_GET['edit'] --> chargement de : vues/produits/produit.form.php

- ### authentification : page d'authentifiction
    chargement de vues/authentification/authentification.php

- ### ??? : contenu $_GET['page'] inconnu
    chargement de : vues/404.html


## 2.b mise en place de vues statiques pour :
creation minimaliste des vues de l'pplication sans dynamisation php

    - visionnage des produits
    - visionnage d'un produit
    - édition d'un produit
    - authentifiction
    - error 404

## 3. Navbar
    - ajout d'une navbar bootstrap 3 de couleur noir 
    - creation des items de navbar & liens

## 4. ajout du fichier de bdd
    - export de la base sql 
