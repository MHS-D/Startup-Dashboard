<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\Auth\AuthService;
use App\Traits\GeneralTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use JavaScript;


class AuthController extends Controller
{
    use GeneralTrait;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function loginView()
    {
        $data['page_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login(LoginRequest $request)
    {
        try{
            $validated = $request->validated();

        }catch(Exception $e){
            throw ValidationException::withMessages([$e->getMessage()]);
        }

    }

    public function RegisterView()
    {
        $data['page_title'] = 'Register';
        return view('auth.register', $data);
    }

    public function Register(RegisterRequest $request)
    {
        try{
            $validated = $request->validated();

            DB::beginTransaction();
            //store user
            $user = $this->authService->storeUser($validated);
            // assign Role to user
            $this->authService->Role(config('settings.roles.names.userRole'),$user,config('settings.roles.actions.assignRole'));
            // send verification email
            $this->authService->sendEmailWithToken($validated['email'],config('settings.email.action.verify'));

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            $this->ExceptionRedirect($e->getMessage());
        }

        return json_encode([
            'redirect_url' => route('login',['success' => 'Account created successfully, login to continue']),
        ]);
    }

    public function ForgetPasswordView()
    {
        $data['page_title'] = 'Forget Password';
        return view('auth.forget-password', $data);
    }
}
