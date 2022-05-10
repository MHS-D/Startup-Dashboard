<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class GoogleRecaptcha implements Rule
{
    public function passes($attribute, $value)
    {
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' => [
                    'secret' => env('RECAPTCHA_SECRET_KEY', false),
                    'remoteip' => request()->getClientIp(),
                    'response' => $value
                ]
            ]
        );
        $body = json_decode((string)$response->getBody());

        return $body->success;
    }

    public function message()
    {
        return 'Are you a robot?';
    }
}
