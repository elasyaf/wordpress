sed -i 's/database_name_here/new-text/g' /var/www/wordpress/wp-config.php
sed -i 's/username_here/new-text/g' /var/www/wordpress/wp-config.php
sed -i 's/password_here/new-text/g' /var/www/wordpress/wp-config.php
sed -i 's/localhost/new-text/g' /var/www/wordpress/wp-config.php

service nginx start
service php7.1-fpm start
while true; do sleep 1000; done