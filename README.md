# Shuttle Bus API 

Forked from: https://github.com/hergin/BusShuttleAPI

```
*Rewrote the Original API with Laravel.
*Changed routes to fulfill REST requirements.
*Added most endpoints.
*Added authorization tokens
```

#### NOTE
The **users** table in the database was renamed to **drivers**, for now just change the name in PHPMyAdmin.
## To Build
### For XAMPP
1. You may need to use the file in this repository at `/database/database_config.sql` to create the database tables for you.
You can import this file into phpMyAdmin **NOT TESTED**.
1. Clone repository to xampp/htdocs folder.
1. Run `composer install` in project directory. Get composer &#8594; https://getcomposer.org/download/
1. Run `composer update`.
1. You can now start the apache server. API endpoints are located in http://localhost/BusShuttleAPI/public/api

## Endpoints
All endpoints now require an access token. See DOCUMENTATION.md for instructions to get a token.

#### Drivers
* `GET` http://localhost/BusShuttleAPI/public/api/drivers 
* `GET` http://localhost/BusShuttleAPI/public/api/drivers/{id}
* `POST` http://localhost/BusShuttleAPI/public/api/drivers
* `DELETE` http://localhost/BusShuttleAPI/public/api/drivers/{id} 

#### Buses
* `GET` http://localhost/BusShuttleAPI/public/api/buses
* `GET` http://localhost/BusShuttleAPI/public/api/buses/{id}
* `POST` http://localhost/BusShuttleAPI/public/api/buses
* `DELETE` http://localhost/BusShuttleAPI/public/api/buses/{id}

#### Inspection Items
* `GET` http://localhost/BusShuttleAPI/public/api/inspection-items
* `GET` http://localhost/BusShuttleAPI/public/api/inspection-items/{id}
* `POST` http://localhost/BusShuttleAPI/public/api/inspection-items
* `DELETE` http://localhost/BusShuttleAPI/public/api/inspection-items/{id}

#### Loops
* `GET` http://localhost/BusShuttleAPI/public/api/loops
* `GET` http://localhost/BusShuttleAPI/public/api/loops/{id}
* `POST` http://localhost/BusShuttleAPI/public/api/loops
* `DELETE` http://localhost/BusShuttleAPI/public/api/loops/{id}

#### Stops
* `GET` http://localhost/BusShuttleAPI/public/api/stops
* `GET` http://localhost/BusShuttleAPI/public/api/stops/{id}
* `POST` http://localhost/BusShuttleAPI/public/api/stops
* `DELETE` http://localhost/BusShuttleAPI/public/api/stops/{id}

## Documentation
See DOCUMENTATION.md if you are accessing the API.

