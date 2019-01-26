<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\User::class)->create([

            'name' => 'admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'password' => Hash::make("admin"), // admin
        'remember_token' => str_random(10),
        'active' => TRUE

        ])->save();
        App\User::where('email', 'admin@admin.com')->get()->first()->roles()->attach(App\Role::slug('administration'));
        factory(App\User::class, 50)->create();
        foreach(App\User::all() as $user){
            $user->roles()->attach(App\Role::slug('user'));
            $user->roles()->attach(App\Role::slug('owned'));
            
        }
        
    }
}
