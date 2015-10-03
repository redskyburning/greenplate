#!/usr/bin/env bash

start_time=`date +%s`

sudo ln -s /shared/greenplate /var/www/public

sudo service apache2 restart

echo "Setting up db"
sudo mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS wordpress"
sudo mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost' IDENTIFIED BY 'password'"
sudo mysql -u root --password=root -e "FLUSH PRIVILEGES"

cd /shared/greenplate

if [[ -f "package.json" ]]; then
	sudo npm install
fi

if [[ -f "bower.json" ]]; then
	bower install --allow-root
fi

echo "Done! devbox provisioned in $(expr `date +%s` - $start_time) seconds"