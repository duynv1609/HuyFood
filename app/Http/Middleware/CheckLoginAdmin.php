<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 4/6/19
 * Time: 10:56 PM
 */

namespace App\Http\Middleware;
use  Closure;

class CheckLoginAdmin
{
	public function handle($request, Closure $next)
	{
		if (!get_data_user('admins'))
		{
			return redirect()->route('admin.login');
		}
		
		return $next($request);
	}
}