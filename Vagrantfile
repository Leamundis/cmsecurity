# -*- mode: ruby -*-
# vi: set ft=ruby :

@script = <<SCRIPT
echo "Installation de pleins de choses!"
sudo apt update  &> /dev/null
export DEBIAN_FRONTEND=noninteractive
sudo debconf-set-selections <<< 'mysql-server/root_password password 0000'
sudo debconf-set-selections <<< 'mysql-server/root_password_again password 0000'
sudo -E apt install -y mysql-server &> /dev/null
sudo apt install apache2 php7.0 libapache2-mod-php7.0 php7.0-mysql -y
sudo service apache2 restart
sudo mysql -uroot -p0000 -e  "CREATE DATABASE cms;"
mysql -u root -p0000 cms < cms.sql
SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network "private_network", ip: "192.168.33.27"
  config.vm.synced_folder "./data", "/var/www/html"
  #config.vm.provision 'shell', inline: @script
  
  config.vm.provider "virtualbox" do |v|
    v.name = "cmsecurity"
  end
end
