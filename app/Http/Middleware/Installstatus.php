<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Installstatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $config = config('warriorcms.installstatus');
        if ($config == 0)
        {
                echo '<script type="text/javascript">
                window.location = "'.config('app.url').'/installer"
                </script>';
        } else if ($config == 1)
        {
            return $next($request);
        }
    }
}
