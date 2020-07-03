<?php

use Illuminate\Database\Seeder;
use App\Residence;

class ResidenceSeeder extends Seeder
{

    private static $TOTAL_RESIDENCES = 10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < ResidenceSeeder::$TOTAL_RESIDENCES; $i++)
        {
            $residence = new Residence();
            $residence->imageUrl = "https://r-cf.bstatic.com/images/hotel/max1024x768/199/199833541.jpg";
            $residence->name = $faker->company;
            $residence->address = $faker->address;
            $residence->save();
        }
    }
}
