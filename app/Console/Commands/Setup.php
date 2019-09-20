<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Setup extends Command
{
    protected $signature = 'wuphf:setup';
    protected $description = 'Install default users and seed database';

    public function handle()
    {
        $this->info('Seeding the database.');
        \Artisan::call('db:seed');
        $this->info('WUPHF! WUPHF! WUPHF!');

        $this->info('Creating Admin User');
        $this->admin();
        $this->info('WUPHF! WUPHF! WUPHF!');

        $this->info('Successfully setup Wuphf.com! WUPHF!');
    }

    public function admin()
    {
        $password = $this->ask('Admin Password');

        $user = User::where('email', 'ryan.howard@gmail.com')->first();

        if ($user) {
            $user->admin = true;
            $user->password = Hash::make($password);
            $user->save();
        }
    }
}
