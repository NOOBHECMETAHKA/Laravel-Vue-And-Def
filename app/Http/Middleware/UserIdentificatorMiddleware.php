<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;

class UserIdentificatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = $request->validate(
            ['user_id' => '']
        );
        $data['user_id'] = Crypt::decryptString($data['user_id']);
        if(User::all()->where('id', $data['user_id'] ?? -1)->first() == null){
            return \response('У вас нету прав!', 403);
        }

        return $next($request);
    }
}
