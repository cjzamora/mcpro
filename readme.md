##MCPro is short for Municapalities, Cities and Provinces in the Philippines.

####A very basic API for getting all the cities, municipality or a province in the Philippines. This API is build on top of the Laravel framework (v4.2).

To use:

* Get all the cities: `http://localhost:8000/api/cities`

* Get all the zipcodes: `http://localhost:8000/api/cities/{id_city}`

* Get the province of the city: `http://localhost:8000/api/cities/{id_city}/province`

* Get all the provinces: `http://localhost:8000/api/provinces`

* Get all the cities within a province `http://localhost:8000/api/provinces/{id_province}/city *`

* Get all the barangay within a city `http://localhost:8000/api/provinces/{id_province}/city/{id_city}`

Notes:

- `*` May include also the municipality.

To install:

- Fork this project and clone into your machine.

- Go to your project root and install `composer` if not yet installed. You can download the file here [composer](https://getcomposer.org/download/)

- If you have installed it globally, do a `composer install` but if the composer file is in your root dir, do a `php composer.phar install`

- Make the storage directory writable by `chmod -R 777 app/storage`.

- Add a database named `mcpro`. You do it in phpmyadmin or in GUI.

- Migrate and seed the files by using `php artisan migrate --seed`.

- Run `php artisan serve` and go [localhost](http://localhost:8000)

- Checkout the instruction on how to use the API in the homepage. 


Todo:

* Add 3 digit code for the different city / municipality

* Separate the city and municipality

* ~~Add ZIP codes for every city or municipality~~

* ~~Add list of barangays in a particular city / municipality~~

Credits:

- Oj Tibi on https://github.com/ojtibi/philippine-provinces-and-cities-sql for the data.

- Eacomm on http://blog.eacomm.com/archives/554/philippine-barangays-lookup-table - for the list of barangays in the Philippines.

#### DISCLAIMER

> The data is offered FOR FREE and anybody can use at their own risk. 
> The data is offered AS IS. While I will strive to keep this data up to date, I do not claim that this is a comprehensive listing and some data may be outdated or missing. 
> I will not be held liable for any inaccuracies or errors found in the data. I am not responsible for final end-user utilization of this data and any damages the user might incur in its use.