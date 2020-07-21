<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        Role::create(['name' => 'user']);
        /** @var \App\Model\User $user */
        $user = factory(\App\Model\User::class)->create();

        $user->assignRole('user');
        Role::create(['name' => 'admin']);

        /** @var \App\Model\User $user */
        $admin = factory(\App\Model\User::class)->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $admin->assignRole('admin');
    }
}
