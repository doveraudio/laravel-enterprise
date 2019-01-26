<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Role::class)->make([
            'name'=>'Administration','slug'=>'administration','description'=>'Administration Role'
            ])->save();
        factory(App\Role::class)->make([
            'name'=>'Owned','slug'=>'owned','description'=>'Owned Role'
            ])->save();
        App\Role::slug('administration')->permissions()->attach(App\Permission::slug('administration'));
        App\Role::slug('owned')->permissions()->attach(App\Permission::slug('owned'));
        App\Role::slug('administration')->permissions()->attach(App\Permission::slug('user'));
        factory(App\Role::class)->make([
                'name'=>'User','slug'=>'user','description'=>'User Role'
                ])->save();
        App\Role::slug('user')->permissions()->attach(App\Permission::slug('user'));
        
    }
}
