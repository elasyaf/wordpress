sed -i 's/database_name_here/$WP_DATABASE/g' /var/www/wordpress/wp-config.php
sed -i 's/username_here/$WP_USER/g' /var/www/wordpress/wp-config.php
sed -i 's/password_here/$WP_PASSWORD/g' /var/www/wordpress/wp-config.php
sed -i 's/localhost/$WP_DB_HOST/g' /var/www/wordpress/wp-config.php

service nginx start
service php7.1-fpm start
while true; do sleep 1000; done