<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        //auth()->loginUsingId(1);

        $users = collect();
        $data = collect([
            ['handle' => 'bigdogryan', 'first' => 'Ryan', 'last' => 'Howard', 'email' => 'ryan.howard@gmail.com'],
            ['handle' => 'scottstots4eva', 'first' => 'Michael', 'last' => 'Scott', 'email' => 'scottstots@gmail.com'],
            ['handle' => 'scrantonicity2', 'first' => 'Kevin', 'last' => 'Malone', 'email' => 'scrantonicity2@gmail.com'],
            ['handle' => 'oscarmartinez', 'first' => 'Oscar', 'last' => 'Martinez', 'email' => 'oscarmartinez@gmail.com'],
            ['handle' => 'bees_knees', 'first' => 'Pam', 'last' => 'Beesly', 'email' => 'pamelabeesly@gmail.com']
        ]);

        foreach ($data as $row) {
            $user = new User();
            $user->fill($row);
            $user->email_verified_at = Carbon::now();
            $user->password = Hash::make(str_random(32));
            $user->api_token = str_random(32);
            $user->save();

            $users->push($user);
        }
    }
}
