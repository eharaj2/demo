<?php

namespace App\Http\Middleware;

use Closure;
use App;
class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('locale')){
            $locale = $request->segment(1);
            if(!empty($locale) && session()->get('locale') != $locale){
                session()->put('locale', $locale);
            }
            App::setLocale(session()->get('locale'));
        }

        if(!session()->has('region')){
            \Config::set('constants.region', config('app.region'));
            session()->put('region', config('app.region'));
        }else{
             $region = $request->segment(2);
            if(!empty($region) && session()->get('region') != $region){
                session()->put('region', $region);
            }
        }
        return $next($request);
    }
}
