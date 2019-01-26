<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Permission::class)->make([
            'name'=>'Administration','slug'=>'administration','description'=>'Administration Permission'
            ])->save();
        factory(App\Permission::class)->make([
            'name'=>'User','slug'=>'user','description'=>'User Permission'
            ])->save();
        factory(App\Permission::class)->make([
            'name'=>'Owned','slug'=>'owned','description'=>'Owned Permission'
            ])->save();

            App\Permission::slug('administration')->attributes()->attach(App\Attribute::slug('administration'));
            App\Permission::slug('administration')->activities()->attach(App\Activity::slug('access'));
            $p = App\Permission::slug('administration');
            echo json_encode($p->attributes()->get())."\n";
            App\Permission::slug('user')->attributes()->attach(App\Attribute::slug('user'));
            App\Permission::slug('user')->activities()->attach(App\Activity::slug('access'));
            App\Permission::slug('owned')->attributes()->attach(App\Attribute::slug('owned'));
            App\Permission::slug('owned')->activities()->attach(App\Activity::slug('update'));
            App\Permission::slug('owned')->activities()->attach(App\Activity::slug('access'));
            App\Permission::slug('owned')->activities()->attach(App\Activity::slug('read'));
            App\Permission::slug('owned')->activities()->attach(App\Activity::slug('update'));
            App\Permission::slug('owned')->activities()->attach(App\Activity::slug('delete'));
         $u = App\Permission::slug('user');
            echo json_encode($u->attributes()->get())."\n";
            echo json_encode($u->activities()->get())."\n";
            //$r = App\Role::first();
           // echo $r;
            /*
            $p->attributes()->attach([
                App\Attribute::where('slug', 'administrator')
        ]);
        $p->activities()->attach([
            App\Activity::all()
        ]);*/
    }
}
