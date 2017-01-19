<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Office365Controller extends Controller
{
    /**
    * Subscribe to Mail Events From the User
    *
    * @param  Request  $request
    * @return Response
    */
    public function notifications(Request $request)
    {
        Log::info('Initializing notifications method');

        $validationToken = $request->validationtoken;
        if (!empty($validationToken)) {
            Log::debug('Notifications validation check request', ['validationToken' => $validationToken]);

            return response($validationToken, 200)
                  ->header('Content-Type', 'text/plain');
        }
        else
        {
            $response = $request->input('value')[0];
            $resource = $response->Resource;
            $splitResource = explode('Messages', $resource);
        }

        return $request->input();
    }
    //////////////////////////
}