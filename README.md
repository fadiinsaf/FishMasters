# 🌊 FishMasters - Plateforme Digitale de Pêche Sportive

![FishMasters Banner](https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80)

## 📌 Présentation du Projet
**FishMasters** est la plateforme officielle de la **Fédération Marocaine de Pêche Sportive**. Sa mission est de digitaliser et de promouvoir les compétitions de pêche au Maroc (Mer et Eau douce), offrant une expérience immersive pour les fans, un outil de gestion précis pour les pêcheurs, et une console d'administration robuste pour les organisateurs.

La plateforme assure le suivi en direct des compétitions, la validation des prises par photo, et le calcul automatisé des classements basés sur des règles de scoring rigoureuses.

---

## 🚀 Fonctionnalités par Profil

### 🔍 Visiteurs & Fans
* **Calendrier Interactif :** Visualisation des dates et lieux (mer, lacs, barrages, rivières).
* **Profils & Stats :** Consultation des fiches pêcheurs et statistiques d'équipes.
* **Engagement :** Système de "Likes" sur les prises et obtention de badges (Super fan, Suiveur fidèle).
* **Notifications :** Abonnement aux alertes pour les records battus ou nouveaux résultats.

### 🎣 Pêcheurs Sportifs
* **Gestion de Profil :** Photo, club, région et techniques favorites (Surfcasting, Jigging, Carpe, etc.).
* **Enregistrement des Prises :** Formulaire de capture (espèce, poids/taille, photo, heure, spot, mode Catch & Release).
* **Analyses :** Graphiques de performance personnelle et historique des classements par manche.

### 🛠️ Organisateurs (Admin)
* **Gestion des Compétitions :** Création de tournois avec règles de scoring spécifiques.
* **Modération :** Validation des prises après vérification des photos et conformité à la taille minimale.
* **Communication :** Envoi d'emails automatiques de confirmation et de résultats officiels.

---

## ⚖️ Logique de Scoring & Classements

La plateforme automatise les calculs selon les règles de la fédération :

1.  **Calcul de Base :**
    Le score total $S$ pour une compétition est calculé ainsi :
    $$S = \sum_{i=1}^{n} (V_i \times C_s)$$
    Où :
    * $V_i$ : Valeur de la prise (poids en grammes ou taille en cm).
    * $C_s$ : Coefficient spécifique à l'espèce (poissons rares ou difficiles).

2.  **Gestion des Égalités :**
    En cas d'ex æquo, les critères de départage sont :
    * La plus grosse prise (poids ou taille maximum).
    * Le nombre total de poissons capturés.

---

## 🛠️ Stack Technique

* **Backend :** PHP 8.x (Architecture MVC), PostgreSQL (PDO), Composer.
* **Frontend :** JavaScript ES6 (Fetch API / AJAX), TailwindCSS ou Bootstrap 5.
* **Moteur de Template :** Twig (optionnel).
* **Sécurité :** `.htaccess` (Rewriting), Authentification par session, protection XSS/CSRF et requêtes préparées.
* **Reporting :** Chart.js (Visualisation) et Dompdf (Génération de rapports).

---

## 📂 Structure du Projet (MVC)

```text
/fishmasters
├── app
│   ├── Controllers      # Logique métier (CompetitionController, CatchController...)
│   ├── Models           # Entités et requêtes PostgreSQL
│   ├── Views            # Templates (Twig ou PHP)
│   ├── Core             # Noyau (Router, Database connection, Session)
│   └── Utils            # Validator, Security, Mailer, PDFGenerator
├── public
│   ├── assets           # CSS, JS, Images, Uploads des prises
│   └── index.php        # Front Controller
├── config               # Fichiers de configuration (DB, Constants)
├── vendor               # Dépendances Composer
└── .htaccess            # Sécurisation et routage
```

## ⚙️ Installation

Pour configurer le projet localement, suivez les étapes ci-dessous :

### 1. Cloner le dépôt

```bash
git clone https://github.com/fadiinsaf/FishMasters.git
cd fishmasters

```



###  2. Installer les dépendances
Le projet utilise Composer pour gérer les dépendances PHP (Twig, Dompdf, etc.) :

```Bash

composer install

```

### 3. Configuration de la Base de Données
Le système repose sur PostgreSQL.

1. Créez une base de données nommée fishmasters.

2. Importez le schéma initial via la commande suivante :

```Bash

psql -U username -d fishmasters < database.sql

```

3. Ajustez vos identifiants de connexion dans le fichier : config/config.php.

4. Lancer le serveur local

Démarrez le serveur de développement PHP :

```Bash

php -S localhost:8000 -t public

```

## 📅 Planning de Développement (5 Jours)

| Jour | Focus | Objectifs |
| :--- | :--- | :--- |
| **J1** | **Foundation** | Conception du MCD, Setup de l'architecture MVC et Configuration PostgreSQL. |
| **J2** | **Auth & Core** | Gestion de l'authentification (Sessions), Profils utilisateurs et création des Compétitions. |
| **J3** | **Capture Logic** | Enregistrement des prises (formulaire), Upload d'images et interface de validation Admin. |
| **J4** | **Scoring Engine** | Développement des algorithmes de calcul des points, gestion des égalités (Tie-break) et statistiques. |
| **J5** | **UX & Export** | Intégration de Chart.js pour les graphiques, génération de rapports PDF, tests finaux et livraison. |


## 👥 Équipe de Développement

Ce projet a été réalisé avec passion par :

* [**fadiinsaf**](https://github.com/fadiinsaf)
* [**Moussa-Mohammed1**](https://github.com/Moussa-Mohammed1)
* [**mohamed-elhamdaoui**](https://github.com/mohamed-elhamdaoui)
* [**anasselghazi**](https://github.com/anasselghazi)
* [**Mariam982440**](https://github.com/Mariam982440)

---
© 2026 **Fédération Marocaine de Pêche Sportive** - Tous droits réservés.