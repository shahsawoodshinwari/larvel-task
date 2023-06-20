# Laravel Task

Task: Create a basic app in Laravel that will be using the store data of an excel file of any data structure.

1. Create a database ERD that will support the application data
2. Create an upload file page that will contain an input field where the user can upload the excel file.
3. Once the form is submitted all the data should be stored in the MYSQL Database.
4. Create the main page where all the uploaded files will be shown, each one of them should have a view page.
5. If the user views the uploaded file, the view page should show the contents of the excel files in the same format they were uploaded.

## Installation

1. Clone (download) the repository:
   clone via ssh
    
   ```sh
   git clone git@github.com:shahsawoodshinwari/larvel-task.git
   ```
    
   clone via https
   ```sh
   git clone https://github.com/shahsawoodshinwari/larvel-task.git
   ```

   direct zip download
   [Download Project as ZIP](https://github.com/shahsawoodshinwari/larvel-task/archive/refs/heads/main.zip)

2. Navigate to the project directory:
   ```sh
   cd laravel-task
   ```
3. Install the dependencies using Composer:
   ```sh
   composer install
   ```
4. Set up the database by configuring the .env file with your database credentials:
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
5. Run the database migrations:
   ```sh
   php artisan migrate
   ```
6. Start the Laravel development server:
   ```sh
   ./start.sh
   ```
7. Access the application in your web browser at http://localhost:8000.

## ERD
Click <a href="https://dbdocs.io/shahsawoodshinwari/Laravel-Task" target="_blank">here</a> to view the ERD (entity-relationship-diagram) of the project
