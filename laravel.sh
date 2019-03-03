git config core.autocrlf true
rm hello-world.php php.ini README.md

# Install and configure PHP 7.1 Ondrej Repository
#
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update
sudo apt-get install libapache2-mod-php7.1 -y
sudo a2dismod php5
sudo a2enmod php7.1
sudo apt-get install php7.1-curl php7.1-cli php7.1-dev php7.1-gd php7.1-intl php7.1-mcrypt php7.1-json php7.1-mysql php7.1-opcache php7.1-bcmath php7.1-mbstring php7.1-soap php7.1-xml php7.1-zip -y

#Install Laravel
#
sudo composer global require 'laravel/installer'
export PATH=~/.composer/vendor/bin:$PATH
sudo chown -R $USER $HOME/.composer
laravel new 
rm -rf ./composer

#Configure public folder
#
printf '%s\n' ':%s/DocumentRoot\ \/home\/ubuntu\/workspace/DocumentRoot\ \/home\/ubuntu\/workspace\/public/g' 'x'  | sudo ex /etc/apache2/sites-enabled/001-cloud9.conf
