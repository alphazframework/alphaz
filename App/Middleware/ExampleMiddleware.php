<?php

namespace App\Middleware;

class ExampleMiddleware
{
    public function before($request, $response, $params)
    {
        //echo 'Before';
        //Get the headers
        $headers = $request->getHeaders();
        foreach ($headers as $name => $values) {
            echo $name.': '.implode(', ', $values);
        }
        //OR
        //Send request to https://zestframework.xyz login page with post method
        $request = $request->curl('https://zestframework.xyz/account/login/action', 'POST');
        //Set transfer and return header
        $request->setReturnHeader(true)->setReturnTransfer(true);
        //Set the fields
        $request->setFields([
            'username'  => 'your-username',
            'password'  => 'your-password',
        ]);
        //Send the request
        $request->send();
        // return => 200
        $statusCode = $request->getCode();
        // Display the body of the returned response
        echo "<br\>".$request->getBody();
    }

    public function after($request, $response, $params)
    {
        //echo 'After';
        $config = [
            'code'    => 200,
            'version' => '1.1',
            'message' => 'Zest Framework',
            'headers' => [
                'Content-Type' => 'text/html',
                'poweredBy'    => 'Zest Framework',
            ],
        ];
        $response = new $response($config);
        $response->setBody('I am Response Body after Example Middleware');
        $response->send();
    }
}
