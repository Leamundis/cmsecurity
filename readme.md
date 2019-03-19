# Pour lancer le projet

## Installer les paquets de bases

```bash
sudo apt update
sudo apt install apache2 php7.0 mysql-server libapache2-mod-php7.0 php7.0-mysql -y
sudo service apache2 restart
```

## Puis créer une base de donnée
```bash
mysql -u root -p0000
create database cms;
exit
```

## Enfin, importer la bdd :
```bash
mysql -u root -p0000 cms < cms.sql
```


### Normalement, c'est bon!
### Le projet est sur l'ip : 192.168.33.27
