# Projet QuizTech 

## Description
QuizTech est une application web interactive dédiée à l'entraînement ludique sur des sujets liés à la technologie. L'objectif est de proposer des quiz de qualité pour tester et améliorer ses connaissances techniques.

Ce projet a été développé en PHP 8.3 avec le framework Laravel 10.2.0 pour le backend, et utilise une base de données MySQL pour stocker les informations des utilisateurs et des quiz.

## Fonctionnalités
- **Côté Client :**
    - Créer un compte utilisateur 
    - Passer des quiz techniques 
    - Consulter et analyser ses résultats de quiz

- **Côté Admin :**
    - Visualiser la liste des utilisateurs inscrits 
    - Gérer les quiz (CRUD : création, lecture, mise à jour, suppression)
    - Gérer les utilisateurs (CRUD)

## Technologies utilisées
**Laravel 10.2.0** : Framework principal pour le développement du site
**Blade** : Moteur de templates pour afficher les vues
**Brise** : Package utilisé pour gérer l'enregistrement et la connexion des utilisateurs
**Composer 2.7.8** : Gestionnaire de dépendances pour PHP
**MySQL** : Base de données utilisée pour stocker les informations du projet
 

## Installation

### Prérequis
Avant de commencer, assurez-vous que les éléments suivants sont installés sur votre machine :

- **PHP 8.3 ou supérieur** (inclus dans MAMP/XAMPP)
- **Composer 2.7.8** (Gestionnaire de dépendances PHP)
- **XAMPP** (pour créer un serveur local avec Apache et MySQL)

### 1. Cloner le projet
Commencez par cloner ce repository sur votre machine locale. Ouvrez un terminal ou une invite de commandes et exécutez la commande suivante :

```bash
cd C:\mamp\htdocs
git clone https://github.com/Augustin51/tech-quizz.git
cd tech-quizz
```

### 2. Lancer votre serveur Mamp
- Aller dans `MAMP`
- Démarrez le serveur `Start Servers`


### 3. Créer la base de données
- Aller sur l'URL `localhost/phpMyAdmin5`
- Créez une nouvelle base de données (par exemple quiz_tech)


### 4. Configurer le fichier .env
- Renommer le fichier `.env.example` en `.env`
- Modifier les informations de connexion à la base de donnée :
```env
DB_HOST=localhost
DB_NAME=quiz-tech // Mettez le nom de la base de données que vous avez créé 
DB_USER=root
DB_PASSWORD=root
```


### 5. Installer les dépendances avec Composer et importer les migrations dans le DB
Installez les dépendances via Composer et importez les migrations dans la base de données avec les commandes suivantes :
```bash
composer install
php artisan migrate --seed
```

### 6. Lancer le server
Exécutez la commande suivante pour démarrer le serveur local Laravel :
```bash
php artisan serve
```


### 6. Lancer le project
Ouvrez votre navigateur et rendez-vous à l'URL suivante pour voir l'application en fonctionnement :
```cpp
http://127.0.0.1:8000/
```


## Crédit
Ce projet a été réalisé par : 
- **Augustin Jacquesson**
- **Raphaël Geneni**
- **Théo creusillet-evrard** 
- **Enio Aiello**

### &copy; 2025 tech-quizz

