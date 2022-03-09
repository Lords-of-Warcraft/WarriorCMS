<?php

namespace Modules\Installer\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $config = config('warriorcms.installstatus');
        if ($config == 1)
        {
                echo '<script type="text/javascript">
                window.location = "'.config('app.url').'/"
                </script>';
        } else if ($config == 0)
        {
            return $next($request);
        }
    }
}
