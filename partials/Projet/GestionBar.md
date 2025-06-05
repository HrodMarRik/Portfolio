# App Bar
**Création d'une application web pour la gestion d'un bar**

**Dates :** Du 29/04/2024 au 10/05/2024
**Lieu :** My Digital School

---

## Contexte

Dans le cadre de ma formation en BTS SIO option SLAM, j'ai réalisé un projet visant à développer une application web de gestion de bar. L'objectif était de créer un outil permettant de gérer les boissons, les tables et les commandes, tout en intégrant des fonctionnalités CRUD (Create, Read, Update, Delete) et des calculs automatiques pour le prix total des commandes.

---

## Consignes

Vous allez devoir réaliser un outil de gestion de bar et de commande simple en utilisant le PHP. Il devra être possible de gérer les éléments suivants :

1. Gestion des boissons
2. Gestion des tables
3. Gestion des commandes

Il devra être possible de réaliser toutes les opérations CRUD (Create - Read - Update - Delete) pour la gestion des boissons ainsi que des tables. La gestion des commandes devra également intégrer la gestion automatique du calcul du prix total, de l'enregistrement de la date de commande, ainsi que de la modification d'un statut de paiement. Ce dernier devra être un booléen défini à "False" lorsque la commande n'est pas payée, mais "True" lorsqu'elle l'est.

Vous devrez créer des formulaires en HTML afin de pouvoir récupérer la saisie des informations utilisateurs.

Vous pouvez utiliser du CSS pour styliser l'ensemble de votre page, mais ce n'est pas obligatoire.

---

## Résultat

| **Page**       | **Page Articles**                      | **Page Commandes**                      | **Page Tables**                    |
|----------------|----------------------------------------|-----------------------------------------|------------------------------------|
| **Image**      | [![image articles](/assets/images/AppBarArticles.png)](/assets/images/AppBarArticles.png) | [![image Commandes](/assets/images/AppBarCommandes.png)](/assets/images/AppBarCommandes.png) | [![image Tables](/assets/images/AppBarTables.png)](/assets/images/AppBarTables.png) |
| **Contenu**    | **Éléments stockés :**<br>- ID (généré automatiquement)<br>- Nom<br>- Description<br>- Prix<br>- Recette | **Éléments stockés :**<br>- Numéro (généré automatiquement)<br>- Contenu<br>- Prix Total<br>- Date (généré automatiquement)<br>- Statut de paiement | **Éléments stockés :**<br>- Numéro (généré automatiquement)<br>- Disponibilité<br>- Contenu |

--- 

## Description des tâches

- Définition de l'architecture de l'application.
- Mise en place du système d'enregistrement des articles, commandes et tables.
- Tests et validation des fonctionnalités.

---

## Moyens utilisés

- **Outils :** GitHub, SublimeText, Apache
- **Technologies :** PHP, HTML, CSS, MySQL

---

## Avec qui

Projet réalisé en autonomie.

---

## Difficultés rencontrées

- **Problème :** Gestion des sessions utilisateurs et sécurisation des données.
- **Solution :** Utilisation de sessions PHP sécurisées et cryptage des données sensibles.

---

## Compétences couvertes

- **Développer la présence en ligne de l’organisation :**
  - Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques.
  - Participer à l’évolution d’un site Web exploitant les données de l’organisation.

- **Travailler en mode projet :**
  - Analyser les objectifs et les modalités d'organisation d'un projet.
  - Planifier les activités.
  - Évaluer les indicateurs de suivi d'un projet et analyser les écarts.

- **Mettre à disposition des utilisateurs un service informatique :**
  - Réaliser les tests d'intégration et d'acceptation d'un service.
  - Déployer un service.

- **Organiser son développement professionnel :**
  - Mettre en place son environnement d’apprentissage personnel.
  - Gérer son identité professionnelle.
  - Développer son projet professionnel.

---

## Bilan personnel

**Aptitudes renforcées :**
- Maîtrise des opérations CRUD en PHP.
- Gestion des sessions utilisateurs et sécurisation des données.
- Optimisation du code et structuration modulaire.

**Axes d'amélioration :**
- Ajouter des fonctionnalités supplémentaires comme la gestion des stocks et des rapports détaillés.
- Explorer des frameworks PHP comme Laravel pour optimiser la gestion des requêtes.

---

