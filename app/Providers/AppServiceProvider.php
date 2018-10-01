<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {

    // View SQL query on the browser
    // \Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    //   echo '<pre>';
    //   print_r([ $query->sql, $query->bindings, $query->time ]);
    //   echo '</pre>';
    // });

    // Warning component in views/components/
    Blade::component('components.warn', 'warn');

    // Information component in views/components/
    Blade::component('components.info', 'info');

    // SVG file Eye Open
    Blade::component('components.svg-eye_open', 'svgEyeOpen');

    // SVG file Eye with diagonal line
    Blade::component('components.svg-eye_with_line', 'svgEyeWithLine');

  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
      //
  }
}
