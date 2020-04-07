<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class CreateAadmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create-admin 
                            {email : User email}
                            {password : User password}
                            {name? : User name. By default, the user email is used}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin user.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        // Préparation (et validation) des inputs
        $type = 'admin';
        $email = $this->argument('email');
        $password = Hash::make($this->argument('password'));
        $name = $this->argument('name') ?? $email;

        $user_details = compact('type', 'name', 'email', 'password');

        $validator = Validator::make($user_details, [
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return;
        }

        // Création de l'utilisateur
        User::create($user_details);

        $this->info('Admin user created successfully');
    }

}
