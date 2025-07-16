# 🏥 Gestion d’un Cabinet Médical

Ce projet est une application web développée avec **Symfony 6**, visant à gérer les opérations essentielles d’un cabinet médical :  
patients, rendez-vous, commentaires et suivi.

## 📅 Année académique
Réalisé en 3ème année - 2024/2025

---

## 🚀 Fonctionnalités principales

- 🔹 **CRUD des patients** : Ajouter, modifier, supprimer, consulter
- 🔹 **CRUD des rendez-vous** : Gestion de la date, heure et motif
- 🔹 **CRUD des commentaires** : Ajout de remarques sur chaque patient
- 📄 Interface simple avec Bootstrap et Twig

---

## 🛠️ Technologies utilisées

| Technologie | Description |
|-------------|-------------|
| Symfony 6   | Framework backend PHP |
| Doctrine ORM | Gestion de la base de données |
| Twig        | Moteur de templates |
| MySQL       | Base de données relationnelle |
| Bootstrap 5 | Design responsive |
| Composer    | Gestionnaire de dépendances |

---

## ⚙️ Installation du projet

```bash
# 1. Cloner le dépôt
git clone https://github.com/mohamed-yawina/gestion-cabinet-medical.git
cd gestion-cabinet-medical

# 2. Installer les dépendances
composer install

# 3. Créer et configurer la base de données
cp .env .env.local
# Modifier les identifiants de la DB dans .env.local

# 4. Créer la base de données
php bin/console doctrine:database:create

# 5. Exécuter les migrations
php bin/console doctrine:migrations:migrate

# 6. Lancer le serveur local
symfony server:start
```

---

## 🤝 Auteurs

👨‍💻 **Réalisé par** : Mohamed Yawina  
📧 **Contact** : mohamed.yawina@example.com  
📚 **Statut** : Étudiant en ingénierie informatique – 3ème année – 2024/2025

---

## 🔗 Liens utiles

- [Symfony Docs](https://symfony.com/doc)  
- [Doctrine ORM](https://www.doctrine-project.org/)  
- [Bootstrap](https://getbootstrap.com/)

---

## ✅ Licence

Ce projet est publié sous licence **MIT** – libre d'utilisation à des fins pédagogiques.
