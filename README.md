# Shuttle Bus API 

Forked from: https://github.com/hergin/BusShuttleAPI

```
*Rewrote the Original API with Laravel.
*Changed routes to fulfill REST requirements.
*Added most endpoints.
```

## To Build
### For XAMPP
1. Clone repository to xampp/htdocs folder.
2. Run `composer install` in project directory. Get composer &#8594; https://getcomposer.org/download/
3. Run `composer update`.
3. You can now start the apache server. API endpoints are located in http://localhost/BusShuttleAPI/public/api

## Endpoints

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

