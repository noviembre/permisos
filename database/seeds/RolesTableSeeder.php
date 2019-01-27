<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        #--- this line (DB::table('roles')->truncate();) will only works if you refresh everything:
        #--- this means: php artisan migrate:refresh
        #--- php artisan db:seed
        # otherwise, it will fail.

        DB::table('roles')->truncate();
        #======================================= for roles table opens =====================================
        // Create Admin role
        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();
        // Create Editor role
        $editor = new Role();
        $editor->name = "editor";
        $editor->display_name = "Editor";
        $editor->save();
        // Create Author role
        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();
        #======================================= for roles table closes =====================================
        // Set roles for user 1,2,3
        // first user as admin
        $user1 = User::find(1);
        #---detachRole: is for not duplicate roles
        $user1->detachRole($admin);
        $user1->attachRole($admin);
        // second user as editor
        $user2 = User::find(2);
        $user2->detachRole($editor);
        $user2->attachRole($editor);
        // third user as author
        $user3 = User::find(3);
        $user3->detachRole($author);
        $user3->attachRole($author);
    }
}
