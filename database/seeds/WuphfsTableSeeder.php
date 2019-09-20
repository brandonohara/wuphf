<?php

use App\Models\User;
use App\Models\Wuphf;
use Illuminate\Database\Seeder;

class WuphfsTableSeeder extends Seeder
{
    public function run()
    {
        $wuphfs = collect();
        $data = collect([
            'scrantonicity2' => ['text' => 'My famous Chili Recipe.', 'url' => 'https://media1.tenor.com/images/b8319e1ee8daa2da21b7633a7b8c8693/tenor.gif?itemid=5408450']
        ]);

        foreach ($data as $handle => $row) {
            $user = User::where('handle', $handle)->first();

            $wuphf = new Wuphf();
            $wuphf->user_id = $user->id;
            $wuphf->fill($row);
            $wuphf->approved = true;
            $wuphf->save();

            $wuphfs->push($wuphf);
        }
    }
}
