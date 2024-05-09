mysql -u root -e "DROP DATABASE IF EXISTS lareduca; CREATE DATABASE lareduca"
php artisan migrate:refresh
 
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=CourseSeeder