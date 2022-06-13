# Laravel Challenge
Code Challenge for Dominion Lending Centres

# Requirements
1. Create a new Laravel project

2. Import the DB (see attached)

3. Determine the problems/suggestions on DB structure including naming, data type, etc… (Keep your thoughts in separate word file named “Laravel_FirstName_LastName.docx” and add it to repository root folder)

4. Create an API route that shows all categories

5. Create a view that nests products under their category and show on the same page.

6. Create/Edit README.md file to explain how to run the project

7. Edit .gitignore file

8. Push your code to a public repository (github or bitbucket)

9. Create a view that allows adding a product. Note: work on different branch

10. Create Pull Request and make code review, add some comments to the Pull Request

11. Merge your branch to master/main

12. Add your repo URL to word file that you created previously

13. Send your word file to the interviewer

# Environment Setup
### Install via Composer
The app has been setup using Composer and ran on Laravel's local development server using the Artisan CLI's `serve` command.

Detailed instructions can be found at https://laravel.com/docs/9.x#installation-via-composer.

1. Clone the github repository to a directory of your choice.
~~~
https://github.com/AaronPua/Laravel-Challenge.git
~~~

2. In the terminal, navigate to that directory.
~~~
cd Projects/LaravelChallenge
~~~

3. Make a copy of the `.env.example` file and rename it to `.env`.

4. Edit the following fields in`.env` to suit your own configuration.
~~~
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
~~~

5. In your MySQL GUI of choice, import the `Sample.sql` file. Make sure the database name matches the one you've defined in your `.env` file.

6. Install the necessary packages.
~~~
npm install
~~~
~~~
composer install
~~~
~~~
php artisan key:generate
~~~

7. Run the Artisan CLI's `serve` command.
~~~
php artisan serve
~~~

8. Access the app in the browser.
~~~
http://localhost:8000
~~~

# Notes
- This app is built using `Laravel 9.16.0` and `PHP 8.1.6`.
- The design of the app is built with the help of [TailwindCSS](https://tailwindcss.com/).