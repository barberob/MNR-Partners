php bin/console tailwind:build --minify
php bin/console cache:clear
php bin/console cache:warmup
chown -R www-data:www-data ./var
chmod -R ug+wr ./var
