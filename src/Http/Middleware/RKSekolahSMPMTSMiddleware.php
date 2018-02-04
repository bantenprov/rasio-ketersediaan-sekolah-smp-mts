<?php namespace Bantenprov\RKSekolahSMPMTS\Http\Middleware;

use Closure;

/**
 * The RKSekolahSMPMTSMiddleware class.
 *
 * @package Bantenprov\RKSekolahSMPMTS
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSekolahSMPMTSMiddleware
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
        return $next($request);
    }
}
