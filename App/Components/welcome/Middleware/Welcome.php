<?php 

namespace App\Components\welcome\Middleware;

class Welcome
{
	public function before($request, $response)
	{
		echo $request->getRequestMethod();
	}
	public function after($request, $response)
	{
		echo "After";
	}
}