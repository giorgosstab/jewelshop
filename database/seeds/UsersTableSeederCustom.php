<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();

        User::create([
            'name'           => 'Administrator',
            'email'          => 'info@jewelshop.tk',
            'password'       => bcrypt('adminpassword'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
            'email_verified' => 1,
        ]);

        $role = Role::where('name', 'editor')->firstOrFail();

        User::create([
            'name'           => 'Editor',
            'email'          => 'editor@jewelshop.tk',
            'password'       => bcrypt('editorpassword'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
            'email_verified' => 1,
        ]);

        $role = Role::where('name', 'author')->firstOrFail();

        User::create([
            'name'           => 'Author',
            'email'          => 'author@jewelshop.tk',
            'password'       => bcrypt('authorpassword'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
            'email_verified' => 1,
        ]);
    }
}
