# Automatisation Laravel
**Création d'un outil d'automatisation pour l'initialisation de projets Laravel**

**Dates :** Du 15/05/2024 au 31/05/2024
**Lieu :** My Digital School

---

## Contexte

Dans le cadre de ma formation, j'ai développé un outil en Python avec interface graphique Tkinter pour automatiser la création et l'initialisation de projets Laravel. L'objectif était de simplifier le processus de démarrage d'un nouveau projet en automatisant les tâches répétitives comme la configuration de la base de données, la création des premières migrations et la mise en place des routes de base.

---

## Fonctionnalités

1. Interface graphique avec Tkinter
   - Formulaire de configuration du projet
   - Sélection du répertoire de destination
   - Options de configuration de la base de données
   - Choix des éléments à générer

2. Configuration automatique
   - Création du projet Laravel via Composer
   - Configuration du fichier .env
   - Initialisation de la base de données
   - Création de l'utilisateur MySQL

3. Génération de code
   - Création des migrations de base
   - Génération des modèles associés
   - Mise en place des routes initiales
   - Création des contrôleurs de base

---

## Résultat

| **Composant**       | **Interface principale**                      | **Configuration BDD**                      | **Génération de code**                    |
|----------------|----------------------------------------|-----------------------------------------|------------------------------------|
| **Image**      | [Image à venir] | [Image à venir] | [Image à venir] |
| **Description**    | **Éléments :**<br>- Nom du projet<br>- Chemin d'installation<br>- Version de Laravel<br>- Options de génération | **Configuration :**<br>- Nom de la BDD<br>- Utilisateur<br>- Mot de passe<br>- Host<br>- Port | **Éléments générés :**<br>- Migrations<br>- Modèles<br>- Routes<br>- Contrôleurs |

--- 

## Description technique

1. **Structure du projet Python**
   ```
   project/
   ├── main.py
   ├── gui/
   │   ├── main_window.py
   │   └── components/
   ├── services/
   │   ├── composer_service.py
   │   ├── database_service.py
   │   └── laravel_service.py
   └── templates/
       ├── migrations/
       ├── models/
       └── controllers/
   ```

2. **Processus d'automatisation**
   - Vérification des prérequis (PHP, Composer)
   - Création et configuration du projet Laravel
   - Configuration de la base de données
   - Génération des fichiers à partir des templates

3. **Technologies utilisées**
   - Python 3.x
   - Tkinter pour l'interface graphique
   - MySQL Connector pour la BDD
   - Subprocess pour les commandes système

---

## Moyens utilisés

- **Langage :** Python 3.x
- **Interface :** Tkinter
- **Base de données :** MySQL
- **Outils :** 
  - VS Code
  - Git
  - Composer (via subprocess)
  - MySQL Connector

---

## Avec qui

Projet réalisé en autonomie.

---

## Difficultés rencontrées

- **Problème 1 :** Gestion des processus système
  - **Solution :** Utilisation de subprocess avec gestion des erreurs et timeouts

- **Problème 2 :** Création et configuration de la base de données
  - **Solution :** Développement d'une classe dédiée avec vérifications de sécurité

---

## Compétences acquises

- **Python :**
  - Programmation orientée objet
  - Création d'interfaces graphiques avec Tkinter
  - Gestion des processus système
  - Manipulation de fichiers et templates

- **Laravel :**
  - Compréhension approfondie de la structure
  - Automatisation de l'initialisation
  - Configuration de base de données

- **Bonnes pratiques :**
  - Architecture modulaire
  - Gestion des erreurs
  - Documentation du code

---

## Bilan personnel

**Points forts :**
- Automatisation réussie du processus d'initialisation
- Interface utilisateur intuitive
- Gestion robuste des erreurs
- Code modulaire et maintenable

---

