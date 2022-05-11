<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Traits\GeneralTrait;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

/**
 * Class AuthService
 * @package App\Services
 */
class AuthService
{
    /**
     * Discription: create a new user
     * @param
     * Name, email, password
     */
    public function storeUser($data)
    {
        try{
            $user= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'username' => $data['username'] ?? null,
                'password' => Hash::make($data['password']),
                'active' => $data['active'] ?? 0,
            ]);
            return $user;

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Description: control user role (assign or remove)
     * @param
     * User, Role, action
     */
    public function Role($role,$user,$action)
    {
        // dd($role,$user,$action);
        try {
            if(!in_array($action, config('settings.roles.actions')) || !in_array($role, config('settings.roles.names')))
                throw new Exception('Invalid action or role');

            if ($action == config('settings.roles.actions.assignRole'))
            {
                if($user->getRoleNames()->count())
                throw new Exception('User already has a role');

                $user->assignRole($role);
            }
            elseif ($action == config('settings.roles.removeRole')) $user->removeRole($role);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

      /**
      * Discription: check credientials for login
     * @param
     * Email, action type (reset or verify),
     */
    public function sendEmailWithToken($email,$action)
    {
        try{
            throw_if(!in_array($action, config('settings.email.action')), new Exception('Invalid Email action'));

            $subject = $action == 'reset' ? config('settings.email.subject.reset') : config('settings.email.subject.verify');
            $view = $action == 'reset' ? config('settings.email.view.reset') : config('settings.email.view.verify');

            $token = Str::random(60);

            DB::table('password_resets')->updateOrInsert([
                'email' => $email,
            ],
                ['email' => $email, 'token' => $token, 'created_at' => now()]
            );

            Mail::send($view,['token' => $token], function($message) use ($email,$subject) {
                      $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
                      $message->to($email);
                      $message->subject($subject);
            });

        }catch(Exception $e){
            // throw new Exception($e->getMessage());
            throw new Exception('Error in sending email');
        }
    }

}
