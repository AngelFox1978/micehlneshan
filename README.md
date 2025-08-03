# Projet Michel - WordPress avec MySQL

Cette configuration Docker Compose met en place un environnement complet avec :
- **Service Web** : WordPress (front-end)
- **Service Database** : MySQL (base de données)

## Structure du projet

```
michel/
├── docker-compose.yml    # Configuration des services Docker
├── .env                  # Variables d'environnement
└── README.md            # Ce fichier
```

## Prérequis

- Docker installé
- Docker Compose installé

## Démarrage des services

### 1. Lancer tous les services
```bash
docker-compose up -d
```

### 2. Vérifier le statut des conteneurs
```bash
docker-compose ps
```

### 3. Voir les logs
```bash
# Logs de tous les services
docker-compose logs

# Logs d'un service spécifique
docker-compose logs wordpress
docker-compose logs mysql
```

## Accès aux services

- **WordPress** : http://localhost:8080
- **MySQL** : localhost:3306

## Configuration par défaut

### Base de données MySQL
- **Host** : mysql (nom du service)
- **Port** : 3306
- **Database** : wordpress_db
- **User** : wordpress
- **Password** : wordpress_password_secure_123
- **Root Password** : root_password_secure_123

### WordPress
- **URL** : http://localhost:8080
- Se connecte automatiquement à la base de données MySQL

## Commandes utiles

### Arrêter les services
```bash
docker-compose down
```

### Arrêter et supprimer les volumes (⚠️ supprime les données)
```bash
docker-compose down -v
```

### Redémarrer un service spécifique
```bash
docker-compose restart wordpress
docker-compose restart mysql
```

### Accéder au shell d'un conteneur
```bash
# WordPress
docker-compose exec wordpress bash

# MySQL
docker-compose exec mysql bash
```

### Sauvegarder la base de données
```bash
docker-compose exec mysql mysqldump -u wordpress -p wordpress_db > backup.sql
```

## Personnalisation

Modifiez le fichier `.env` pour changer :
- Les mots de passe
- Les ports d'exposition
- Les noms de base de données

## Volumes persistants

- `wordpress_data` : Contient les fichiers WordPress
- `mysql_data` : Contient les données de la base MySQL

Ces volumes garantissent que vos données persistent même après l'arrêt des conteneurs.