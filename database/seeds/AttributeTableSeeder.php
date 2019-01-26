<?php

use Illuminate\Database\Seeder;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Attribute::class)->make([
            'name'=>'Administration','slug'=>'administration','description'=>'Administration Attribute'
            ])->save();
        //
        factory(App\Attribute::class)->make([
            'name'=>'User','slug'=>'user','description'=>'User Attribute'
            ])->save();
        factory(App\Attribute::class)->make([
            'name'=>'Owned','slug'=>'owned','description'=>'Owned Attribute'
            ])->save();
        factory(App\Attribute::class)->make([
            'name'=>'Attribute','slug'=>'attribute','description'=>'Attribute Attribute'
            ])->save();
        factory(App\Attribute::class)->make([
            'name'=>'Activity','slug'=>'activity','description'=>'Activity Attribute'
            ])->save();
            
        factory(App\Attribute::class)->make([
            'name'=>'Permission','slug'=>'permission','description'=>'Permission Attribute'
            ])->save();
        factory(App\Attribute::class)->make([
            'name'=>'Role','slug'=>'role','description'=>'Role Attribute'
            ])->save();

    }
}
