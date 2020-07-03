<?php

use Illuminate\Database\Seeder;

use App\User;

class residenceUserSeeder extends Seeder
{

    private function add_residence_jorge()
    {
        $jorge_user = User::firstWhere('email', 'jorge@example.com');
        $jorge_user->residences()->save(App\Residence::first());
    }

    private function add_residences_admin()
    {
        $admin = User::firstWhere('email', 'admin@example.com');
        $admin->residences()->saveMany(App\Residence::all());
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->add_residence_jorge();
        $this->add_residences_admin();
    }
}
