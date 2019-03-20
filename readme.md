# Pour lancer le projet

## Récupérer le projet
```bash
git clone https://github.com/Leamundis/cmsecurity.git
cd cmsecurity
vagrant up
vagrant ssh
```

## Installer les paquets de bases

```bash
cd /var/www/html
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


# Test sur un autre projet
### J'ai testé le projet de Sophie : https://github.com/SopRop/test_securite

Le projet étant assez 'simple', il n'y avait pas spécialement de faille.
Ses inputs étaient vérifiés avec des regex en php, en back.

J'ai d'abord essayé de faire des injection sql simple, mais cela n'était donc pas possible, étant donné que seule les lettres (et certains caractère spéciaux sous certaines conditions) étaient autorisées.
J'en ensuite essayé de bypasser ces regex, mais je n'ai pas non plus réussi.

Au final, la seule chose que j'ai réussi à mettre en place, c'est de remplir petit à petit se base de donnée avec ce script :

```bash
#!/bin/bash
for i in `seq 1 100000`;
do
    curl 'http://192.168.33.67/register.php' -d "name=[aaaa]&firstname=[aaaa]&birthdate=1985-12-12&email=jon$i.jonjon@test.fr" &> /dev/null
done
```

Sachant que j'avais mis une chaine de caractère de 250 de long à la place des [aaaa] (j'ai changé ici pour que ça reste lisible).
