<?php

namespace Database\Seeders;

use App\Models\YoutubeDavaleba;
use Cassandra\Bigint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        YoutubeDavaleba::table('users')->insert([

            'name' => Str::random(10),
            'link' => 'https://www.youtube.com/watch?v=gTOJL9Nyi_A','https://www.youtube.com/watch?v=bXE6B6Usj6o','https://www.youtube.com/watch?v=Kjkx2BASAZA','https://www.youtube.com/watch?v=mp4Evol_aR4','https://www.youtube.com/watch?v=yH88qRmgkGI&list=RDyH88qRmgkGI&start_radio=1',
            'description' => Str::random(20),
            'number Of likes'=>bigInteger::random(100000),
            'number Of dislikes'=>bigInteger::random(50000),
            'number Of subscribes'=>bigInteger::max(30000),
            'video length' => Integer::random(24)


        ]);

    }
}
