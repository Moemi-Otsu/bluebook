<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name'=>'taro', 'mail'=>'taro@taro@yamada'],
            ['name'=>'hanako', 'mail'=>'hanako@taro@flower'],
            ['name'=>'sachiko', 'mail'=>'sachico@taro@happy']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
