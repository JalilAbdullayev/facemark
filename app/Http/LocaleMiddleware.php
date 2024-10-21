<?php

namespace App\Http;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware {
    public function handle(Request $request, Closure $next) {
        if(in_array($request->segment(1), ['en', 'ru'], true)) {
            App::setLocale($request->segment(1));
            Session::put('locale', $request->segment(1));
        } else {
            App::setLocale('az');
            Session::put('locale', 'az');
        }
        return $next($request);
    }
}
