<?php

use Illuminate\Database\Seeder;

class AdminTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name = 'admin';
        $admin->password = bcrypt('test');
        $admin->save();
        
    }
}
