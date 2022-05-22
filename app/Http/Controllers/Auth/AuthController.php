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
use Illuminate\Support\Facades\Hash;
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
        User::all();
        return view('auth.login', $data);
    }

    public function login(LoginRequest $request)
    {
        try{
            $validated = $request->validated();

            $user = $this->authService->checkUserCredentials($validated);

            throw_if(!$user,new Exception('Invalid credentials'));

            return $this->authService->redirectAfterAuthentication($user);

        }catch(Exception $e){
            throw ValidationException::withMessages([$e->getMessage()]);
        }

    }

    public function registerView()
    {
        $data['page_title'] = 'Register';
        return view('auth.register', $data);
    }

    public function register(RegisterRequest $request)
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

            return $this->authService->ajaxRedirect(route('login',['success' => 'Account created successfully, login to continue']));

        }catch(Exception $e){
            DB::rollBack();
            $this->ExceptionRedirect($e->getMessage());
        }

    }

    public function forgetPasswordView()
    {
        $data['page_title'] = 'Forget Password';
        return view('auth.forget-password', $data);
    }

    public function forgetPassword(Request $request)
    {
        try{
            $validated = $request->validate([
                'email' => 'required|email|exists:users,email',
            ]);

            DB::beginTransaction();
            //send email with token
            $this->authService->sendEmailWithToken($validated['email'],config('settings.email.action.reset'));
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            $this->ExceptionRedirect($e->getMessage());
        }

        return json_encode([
            'success' =>'Password reset link sent to '.$validated['email'],
        ]);
    }

    public function resetPasswordView($token)
    {
        $data['page_title'] = 'Reset Password';
        $data['token'] = $token;
        return view('auth.reset-password', $data);
    }

    public function resetPassword(Request $request)
    {
        $validated = $request->validate([
            'token' => 'required|exists:password_resets,token',
            'password' => 'required|confirmed|min:8',
        ],[
            'token.exists' => 'Invalid token',
        ]);

        try{
            $this->authService->passwordReset($validated);
        }catch(Exception $e){
            $this->ExceptionRedirect($e->getMessage());
        }

        return json_encode([
            'redirect_url' => route('login',['success' => 'Password reset successfully, login to continue']),
        ]);
    }
}
