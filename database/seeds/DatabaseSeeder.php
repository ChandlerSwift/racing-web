<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dirt_track = new App\Track();
        $dirt_track->name = "Dirt Track";
        $dirt_track->description = "A third of a mile of good ol' dirt! What more could you ask for?";
        $dirt_track->length_mm = 536448; // 1/3 mile
        $dirt_track->save();

        $grass_track = new App\Track();
        $grass_track->name = "Grass Track";
        $grass_track->description = "It's jumpy! It's bumpy! Hold on to your shoes!";
        $grass_track->length_mm = 1072896; // 2/3 mile
        $grass_track->save();

        $go_kart = new App\Vehicle();
        $go_kart->name = "Go Kart";
        $go_kart->description = "It's a kart. It goes. I really don't know why I need to be explaining this.";
        $go_kart->save();

        $dirt_bike = new App\Vehicle();
        $dirt_bike->name = "Dirt Bike";
        $dirt_bike->description = "DirT bIKe!!!1! Such cool, very wow.";
        $dirt_bike->save();

        factory(App\User::class, 10)->create();
            
        factory(App\Race::class, 100)->create();
    }
}
