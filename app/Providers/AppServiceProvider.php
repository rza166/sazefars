<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Validator::extend('codemeli', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[0-9]{5}_?\s?-?[0-9]{5}$/', $value);
      });
          Validator::extend('tavalod', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[0-9]{8}$/', $value);
      });
      Validator::extend('mobile', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[0-9]{6}_?\s?-?[0-9]{5}$/', $value);
      });
      Validator::extend('tel', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[0-9]{6}_?\s?-?[0-9]{5}$/', $value);
      });
    }
}
