<?php
namespace App\Traits;

use Illuminate\Validation\ValidationException;

trait GeneralTrait {

    /**
     * @param
     * Exception Message
     */
    function ExceptionRedirect($ExceptionMessage)
    {
        if(request()->wantsJson() && !request()->ajax()){
            return response()->json(['error' => $ExceptionMessage], 300);
        }
        throw ValidationException::withMessages([$ExceptionMessage]);
    }


}


?>
