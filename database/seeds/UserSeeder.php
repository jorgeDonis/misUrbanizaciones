<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{

    private function create_admin()
    {
        $admin = new User();
        $admin->name = 'Amparo';
        $admin->email = 'admin@example.com';
        $admin->password = Hash::make('admin');
        $admin->save();
    }

    private function create_resident()
    {
        $resident = new User();
        $resident->name = 'Jorge';
        $resident->email = 'jorge@example.com';
        $resident->password = Hash::make('jorge');
        $resident->save();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create_admin();
        $this->create_resident();
    }
}
