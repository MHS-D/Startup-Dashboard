<?php

namespace App\Http\Controllers\Errors;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use JavaScript;


class ErrorsController extends Controller
{
    use GeneralTrait;

    public function unverifiedEmail()
    {
        $data['page_title'] = 'Verify Email';
        return view('errors.unverified', $data);
    }


}
