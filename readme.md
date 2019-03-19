### A installer

```bash
sudo apt update
sudo apt install apache2 php7.0 mysql-server libapache2-mod-php7.0 php7.0-mysql -y
rm /var/www/html/index.html
serice apache2 restart