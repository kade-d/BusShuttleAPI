<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{

    protected $signature = 'users:create';

    protected $description = 'Register a new user in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->ask("Name?");
        $email = $this->ask("Email?");
        $password = $this->secret("Password?");
        $admin = $this->choice("Is this user an admin (0 for no, 1 for yes)", [0, 1], 0);

        if($this->confirm("Are you sure you want to create this user?")){
            User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                    'is_admin' => $admin
                ]
            );
        }
    }
}
