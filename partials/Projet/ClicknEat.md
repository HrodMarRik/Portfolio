# ClicknEat
**Application de commande de repas en ligne**

**Dates :** Du 01/03/2024 au 15/04/2024
**Lieu :** My Digital School

---

## Contexte

Dans le cadre de ma formation, j'ai développé une application web de commande de repas en ligne utilisant le framework Laravel. L'objectif était de créer une plateforme permettant aux utilisateurs de commander des repas auprès de différents restaurants, avec un système de gestion pour les restaurateurs.

---

## Fonctionnalités

1. Interface utilisateur
   - Inscription et authentification des utilisateurs
   - Catalogue des restaurants et menus
   - Système de panier
   - Suivi des commandes

2. Espace restaurateur
   - Gestion du menu et des plats
   - Gestion des commandes
   - Tableau de bord des ventes
   - Gestion des disponibilités

---

## Résultat

| **Composant**    | **Interface client**                      | **Espace restaurateur**                    |
|------------------|------------------------------------------|-------------------------------------------|
| **Image**        | [Image à venir]                          | [Image à venir]                           |
| **Description**  | **Fonctionnalités :**<br>- Recherche de restaurants<br>- Commande de repas<br>- Paiement sécurisé<br>- Suivi de commande | **Gestion :**<br>- Menu et plats<br>- Commandes<br>- Stock<br>- Statistiques |

--- 

## Description technique

1. **Architecture du projet**
   ```
   ClicknEat/
   ├── app/
   │   ├── Http/Controllers/
   │   ├── Models/
   │   └── Services/
   ├── resources/
   │   ├── views/
   │   └── js/
   ├── routes/
   │   └── web.php
   └── database/
       └── migrations/
   ```

2. **Stack technique**
   - Backend Laravel 10
   - Frontend avec Alpine.js et Tailwind CSS
   - Base de données MySQL
   - API RESTful
   - Authentication avec Laravel Breeze

3. **Sécurité**
   - Authentification utilisateur
   - Protection CSRF
   - Validation des données
   - Gestion des permissions

---

## Moyens utilisés

- **Backend :** PHP 8.1, Laravel 10
- **Frontend :** Alpine.js, Tailwind CSS
- **Base de données :** MySQL
- **Outils :** 
  - VS Code
  - Git
  - Laravel Breeze
  - Vite

---

## Avec qui

Projet réalisé en équipe de 4 développeurs.

---

## Difficultés rencontrées

- **Problème 1 :** Gestion des états de commande
  - **Solution :** Implémentation d'un système de statuts avec notifications

- **Problème 2 :** Optimisation des performances
  - **Solution :** Mise en cache des données et pagination des résultats

---

## Compétences acquises

- **Laravel :**
  - Développement MVC
  - Gestion de l'authentification
  - API RESTful
  - Migrations et seeders

- **Frontend :**
  - Alpine.js pour la réactivité
  - Tailwind CSS pour le design
  - Intégration avec Vite

- **Bonnes pratiques :**
  - Clean Code
  - Tests unitaires
  - Versioning avec Git
  - Documentation du code

---

## Bilan personnel

**Points forts :**
- Application complète et fonctionnelle
- Interface utilisateur intuitive
- Architecture modulaire
- Bonnes performances

---
