# CSE327-Group1-Ahmad Abeer

Since the website is hosted for free, it doesn't have an SSL certificate. As a result, it may display a warning indicating that the site is not secure or potentially dangerous. To proceed, you'll need to click the details button and choose to visit the unsafe site despite the warning. Then it will work file.

## Environment Setup
### Pre-requiement
1. Install Xampp Server.
2. Install Laravel Composer.
3. Install node js.

### Setup Laravel:

### Setup Project:
1. Open xampp -> Explporer -> htdocs.
2. Download the zip file into htdocs.
3. Start Appache, mysql in Xampp server.
4. create a database 'medimartfinaldb'.
5. Open Terminal in htdocs.
6. Run the folloing commends. <br>
-> php artisan migrate <br>
-> php artisan db:seed <br>
-> php artisan optimize <br>
-> php artisan serve