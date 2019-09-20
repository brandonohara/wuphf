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
            'scrantonicity2' => ['text' => 'My famous Chili Recipe.', 'url' => 'https://media1.tenor.com/images/b8319e1ee8daa2da21b7633a7b8c8693/tenor.gif?itemid=5408450'],
            'bigdogryan' => ['text' => 'Still waiting.', 'url' => 'https://imagesvc.timeincapp.com/v3/fan/image?url=https://netflixlife.com/wp-content/blogs.dir/340/files/2018/07/Screen-Shot-2018-07-31-at-12.34.20-AM.jpg&c=sc&w=2192&h=1230'],
            'bees_knees' => ['text' => 'Ring Ring, WUPHFS HERE TO STAY. #WUPHF', 'url' => 'https://www.lifeandstylemag.com/wp-content/uploads/2019/02/Jenna-Fischer-Best-Quotes-The-Office-Promo.jpg']
        ]);

        foreach ($data as $handle => $row) {
            $user = User::where('handle', $handle)->first();

            $wuphf = new Wuphf();
            $wuphf->user_id = $user->id;
            $wuphf->fill($row);
            $wuphf->approved = true;
            $wuphf->featured = true;
            $wuphf->save();

            $wuphfs->push($wuphf);
        }
    }
}
