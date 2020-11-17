<?php
namespace App\Http\Middleware;
/* from 
https://stackoverflow.com/questions/60487349/how-to-make-language-button-switch-on-laravel
*/

class SetLocale extends Middleware
{
    public function handle($request, Closure $next)
    {
        if(session()->has('locale')) {
            app()->setLocale(session('locale'));
            app()->setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
