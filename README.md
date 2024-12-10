# Next Step App

>[!CAUTION]
>Please read all the points of the README in order to make good use of the project. Thank you.

## Description

The main objective of this website is to help us with the job search, because it makes it easier for us to keep track of all the offers to which we apply, with all kinds of details.

We can choose the status in which the offer is and add personal comments to know at all times from an accessible and quick interface to all our offers.
### Home view
Here we can see all the offers we have applied and if we want to see the offer with all the details just click on it.
![image](https://github.com/user-attachments/assets/d0be2cb1-7327-43d0-8222-d81e768553e2)

### Details view
In this view you can see full detailed offer and all the tracking steps.
![image](https://github.com/user-attachments/assets/32540923-e7df-4ac3-a67a-69acf6bda3c2)

## Requierements

In order to run and try this project locally you will need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. Operating System terminal

3. Install Composer

4. Install NPM via Node.js

5. Xdebug (so you can see the tests coverage)

6. Postman (or any other platform to use the API, like *Insomnia*)

## Installation

1. Clone the repository:
```
    git clone https://github.com/Camposx/Next-Step-App.git
```

2. Install Composer:
```
    composer install
```

3. Install NPM:
```
    npm install
```

4. Create a '.env' file by taking the example '.env.example' file and modify the lines:
    - DB_CONNECTION=mysql
    - DB_DATABASE=nextstep_db

5. Create a database in MySQL with no tables

6. Generate all the tables and fake values:
```
    php artisan migrate:fresh --seed
```

7. Run NPM:
```
    npm run dev
```

8. Run Laravel (in other terminal):
```
    php artisan serve
```

This will generate an url that will lead you to the web:
```
    http://127.0.0.1:8000/
```

## Database diagram

![image](https://github.com/user-attachments/assets/458d4f91-f556-450f-8696-2a67a8d92c6a)

##  API Endpoints

As there are two tables in the database, we have 5 endpoints for each of the tables

### Jobs

- GET (Retrieve all jobs)
```
    http://127.0.0.1:8000/api/jobs
```

- GET BY ID (retrieve one job selected by ID)
```
    http://127.0.0.1:8000/api/jobs/{id}
```

- POST (insert a new job)
```
    http://127.0.0.1:8000/api/jobs
```

- PUT (update an job selected by ID)
```
    http://127.0.0.1:8000/api/jobs/{id}
```

- DELETE (delete an job selected by ID)
```
    http://127.0.0.1:8000/api/jobs/{id}
```

### Job trackings

- GET (retrieve all trackings)
```
    http://127.0.0.1:8000/api/job-tracker
```

- GET BY ID (retrieve one tracking selected by ID)
```
    http://127.0.0.1:8000/api/job-tracker/{id}
```

- POST (create a new tracking on a specific job selected by ID.)
```
    http://127.0.0.1:8000/api/offers/{id}/job-tracker
```

- PUT (update a tracking selected by ID)
```
    http://127.0.0.1:8000/api/job-tracker/{id}
```

- DELETE (delete a tracking selected by ID)
```
    http://127.0.0.1:8000/api/job-tracker/{id}
```

## Tests

This project has a **98.4%** of test coverage.

You can try the tests and see the coverage in the terminal using:
```
   php artisan test --coverage
```
If you did not install xdebug just use this command without coverage.
```
   php artisan test
```
![image](https://github.com/user-attachments/assets/c5b1016a-5b80-43a2-ab2e-255c5eae1d3b)

## Technologies and Tools

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='phpMyAdmin' src='https://img.shields.io/badge/phpMyAdmin-100000?style=for-the-badge&logo=phpMyAdmin&logoColor=white&labelColor=6C78AF&color=6C78AF'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='XAMPP' src='https://img.shields.io/badge/XAMPP-100000?style=for-the-badge&logo=XAMPP&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Canva' src='https://img.shields.io/badge/Canva-100000?style=for-the-badge&logo=Canva&logoColor=white&labelColor=00C4CC&color=00C4CC'/></a>

## Author
 
[Alejandro Campos]([https://github.com/ArianaMartinMartinez](https://github.com/Camposx))
