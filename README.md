# Force JSON Response for every request
This library checks the Accept header of each request. If the header is missing or has a value other than `application/json`, then the value will be set to `application/json`. This is enough for Laravel to return each response in JSON format.
Install the package through Composer.
Run the Composer require command from the Terminal:
```
composer require bibrokhim/laravel-force-json-response
```