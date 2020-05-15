##Bus Shuttle API Docs
####Routing
Url routes are loaded in `/app/Providers/RouteServiceProvider.php`
   * There are two types of routes:
     * Web routes are found in `/routes/web.php`
     * API routes are configured in `/routes/api.php`
   
####Database
Database configuration is found in `/.env`

####API
Routes that are configured in `/routes/api.php` are forwarded to controllers in `/app/Http/Controllers`
* Controllers are responsible for handling requests made to the API

####Views
Laravel generates default views for web routes. These can be configured in `/routes/web.php`.

###Misc.
Right now no middleware is used. To implement API tokens policies, middleware, and guards may need to be used.
These are handled by the framework. Documentation can be found on Laravel's website.
