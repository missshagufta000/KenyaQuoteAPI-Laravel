# kanyewest-quotes
Kanye West Quotes Technical Test

## Prerequisites
* PHP 7+
* Postman
* Composer
* Github account
* Third Part API of Kanye West Quotes ``https://api.kanye.rest``

## Technology used

### Frontend
* Laravel Framework
* JavaScript
* HTML
* CSS
* JQuery

### Backend 
  * Laravel Framework

### Version 1 Endpoints

| Method         | Endpoint             | Description  |
| ---         |     ---      |          --- |
| GET   | /api/v2/quotes/random-five    | Get five random quotes of Kanye West  |

## Setup 

### 1. Backend
  1. Clone the repository
    ```https://github.com/Dom58/kanyawest-quotes.git``` by running ```git clone https://github.com/Dom58/kanyawest-quotes.git```
     
  2. Go to root folder by running

  ```cd kanyawest-quotes```

   3. Install dependencies

    Run ```composer install``` and  ```composer update```
     
   4. Start the server of development
  
    Run ```php artisan serve``` which will run on port ``8000`` or set new port ``````php artisan serve --port=ADD_YOUR_PORT_NUMBER````` and copy the generated url by pasting it on any browser.
  
    6. To test the API: Open postman to test challenge API and add this url with ``GET`` method
    ```http://localhost:8000/api/v2/quotes/random-five``` or when you changed the port use this ```http://localhost:ADD_YOUR_PORT_NUMBER/api/v2/quotes/random-five```

### 2. Frontend
  1. To run the frontend copy and past the link generated on command line(cmd) and paste to any  browser on index page you will see all the features of the application.

### 3. Run Test
Go to your root folder of your project and open ``CMD`` in it and type ``php artisan test``  or run ```./vendor/bin/phpunit```with enter from the keyboard, and wait the test to run.
  
### 4. Screenshoots
#### 4.1. Page to display all 5 random quotes of Kanye West

<img width="1330" alt="Screen Shot 2022-04-01 at 20 28 18" src="https://user-images.githubusercontent.com/33524053/161322061-c9834448-eb9c-483a-8a67-95f48c4b8344.png">

#### 4.2. API response to Fetch 5 random quotes of Kanye West from postman

<img width="1001" alt="Screen Shot 2022-04-01 at 20 37 02" src="https://user-images.githubusercontent.com/33524053/161322533-01376aa8-7549-4e39-b140-c90786072616.png">

#### 4.3. Passed Tests

<img width="483" alt="Screen Shot 2022-04-01 at 20 40 30" src="https://user-images.githubusercontent.com/33524053/161322891-4f7064f5-9f31-4589-a5ed-7c573744f302.png">


  
## Author
Dominique Ndahimana
