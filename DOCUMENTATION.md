##Bus Shuttle API Docs
####Routing
Url routes are loaded in `/app/Providers/RouteServiceProvider.php` <br>

   * There are two types of routes:
     * Web routes are found in `/routes/web.php`
     * API routes are configured in `/routes/api.php`
     
Routes can be named using `Route::get(..)->name("homeRoute")` <br>
These routes can be accessed using `route("homeRoute")` <br>

Authorization routes are setup using `Passport::routes()` in `AuthServiceProvider`

####Authorization
Laravel Passport is used to provide a full OAuth2 server implementation. Docs here: https://laravel.com/docs/7.x/passport<br>

The two first-party applications will get tokens using OAuth's Password grants. https://laravel.com/docs/7.x/passport#password-grant-tokens

#####To request a token
Make a `POST` request to localhost/BusShuttleAPI/public/oauth/token
``` 
'grant_type' => 'password',
'client_id' => 'client-id',
'client_secret' => 'client-secret',
'username' => 'taylor@laravel.com',
'password' => 'my-password',
'scope' => '', 
```

**Note**: The username and password will have to be registered in the users table in the database. For now the only way to add
entries to this table is to go to localhost/BusShuttleAPI/public/register and register an account. <br>
**A suitable replacement needs to be created.**

You will receive a json response such as:
```
"token_type": "Bearer",
    "expires_in": 99999,
    "access_token": "",
    "refresh_token": ""
```

Once you have an API token you can make requests to the API with the header: <br>
`Authorization: Bearer {ACCESS_TOKEN}`

####Middleware
Middleware is found in `app/Http/Middleware`.
Some middleware is applied to routes in `RouteServiceProvider`.
Middleware is registered in `app/Http/Kernel.php`.

####Database
Database configuration is found in `/.env`

####API
Routes that are configured in `/routes/api.php` are forwarded to controllers in `/app/Http/Controllers`
* Controllers are responsible for handling requests made to the API

####Views
Laravel generates default views for web routes. These can be configured in `/routes/web.php`.

###Misc.
Passport uses the 
