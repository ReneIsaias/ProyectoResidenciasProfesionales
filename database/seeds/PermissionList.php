<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PermissionList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");



        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')
        ]);

        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'

        ]);

        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);


        //permission
        $permission_all = [];


        //permission role
        $permission = Permission::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'A user can list role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'A user can see role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'A user can create role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'A user can edit role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'A user can destroy role',
        ]);

        $permission_all[] = $permission->id;

        //Permission Career
        $permission = Permission::create([
            'name' => 'List career',
            'slug' => 'career.index',
            'description' => 'A user can list career',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show career',
            'slug' => 'career.show',
            'description' => 'A user can see career',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create career',
            'slug' => 'career.create',
            'description' => 'A user can create career',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit career',
            'slug' => 'career.edit',
            'description' => 'A user can edit career',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy career',
            'slug' => 'career.destroy',
            'description' => 'A user can destroy career',
        ]);

        $permission_all[] = $permission->id;

        //Permission covenat
        $permission = Permission::create([
            'name' => 'List convenat',
            'slug' => 'covenat.index',
            'description' => 'A user can list covenat',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show covenat',
            'slug' => 'covenat.show',
            'description' => 'A user can see covenat',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create covenat',
            'slug' => 'covenat.create',
            'description' => 'A user can create covenat',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit covenat',
            'slug' => 'covenat.edit',
            'description' => 'A user can edit covenat',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy covenat',
            'slug' => 'covenat.destroy',
            'description' => 'A user can destroy covenat',
        ]);

        $permission_all[] = $permission->id;

        //Permission Semester
        $permission = Permission::create([
            'name' => 'List semester',
            'slug' => 'semester.index',
            'description' => 'A user can list semester',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show semester',
            'slug' => 'semester.show',
            'description' => 'A user can see semester',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create semester',
            'slug' => 'semester.create',
            'description' => 'A user can create semester',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit semester',
            'slug' => 'semester.edit',
            'description' => 'A user can edit semester',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy semester',
            'slug' => 'semester.destroy',
            'description' => 'A user can destroy semester',
        ]);

        $permission_all[] = $permission->id;

        //Permission Studyplan
        $permission = Permission::create([
            'name' => 'List studyplan',
            'slug' => 'studyplan.index',
            'description' => 'A user can list studyplan',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show studyplan',
            'slug' => 'studyplan.show',
            'description' => 'A user can see studyplan',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create studyplan',
            'slug' => 'studyplan.create',
            'description' => 'A user can create studyplan',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit studyplan',
            'slug' => 'studyplan.edit',
            'description' => 'A user can edit studyplan',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy studyplan',
            'slug' => 'studyplan.destroy',
            'description' => 'A user can destroy studyplan',
        ]);

        $permission_all[] = $permission->id;

        //Permission Typebeca
        $permission = Permission::create([
            'name' => 'List typebeca',
            'slug' => 'typebeca.index',
            'description' => 'A user can list typebeca',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show typebeca',
            'slug' => 'typebeca.show',
            'description' => 'A user can see typebeca',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create typebeca',
            'slug' => 'typebeca.create',
            'description' => 'A user can create typebeca',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit typebeca',
            'slug' => 'typebeca.edit',
            'description' => 'A user can edit typebeca',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy typebeca',
            'slug' => 'typebeca.destroy',
            'description' => 'A user can destroy typebeca',
        ]);

        $permission_all[] = $permission->id;

        //Permission Typesafe
        $permission = Permission::create([
            'name' => 'List typesafe',
            'slug' => 'typesafe.index',
            'description' => 'A user can list typesafe',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show typesafe',
            'slug' => 'typesafe.show',
            'description' => 'A user can see typesafe',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create typesafe',
            'slug' => 'typesafe.create',
            'description' => 'A user can create typesafe',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit typesafe',
            'slug' => 'typesafe.edit',
            'description' => 'A user can edit typesafe',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy typesafe',
            'slug' => 'typesafe.destroy',
            'description' => 'A user can destroy typesafe',
        ]);

        $permission_all[] = $permission->id;

        //Permission Typefamily
        $permission = Permission::create([
            'name' => 'List typefamily',
            'slug' => 'typefamily.index',
            'description' => 'A user can list typefamily',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show typefamily',
            'slug' => 'typefamily.show',
            'description' => 'A user can see typefamily',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create typefamily',
            'slug' => 'typefamily.create',
            'description' => 'A user can create typefamily',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit typefamily',
            'slug' => 'typefamily.edit',
            'description' => 'A user can edit typefamily',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy typefamily',
            'slug' => 'typefamily.destroy',
            'description' => 'A user can destroy typefamily',
        ]);

        $permission_all[] = $permission->id;

        //Permission Post
        $permission = Permission::create([
            'name' => 'List post',
            'slug' => 'post.index',
            'description' => 'A user can list post',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show post',
            'slug' => 'post.show',
            'description' => 'A user can see post',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create post',
            'slug' => 'post.create',
            'description' => 'A user can create post',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit post',
            'slug' => 'post.edit',
            'description' => 'A user can edit post',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy post',
            'slug' => 'post.destroy',
            'description' => 'A user can destroy post',
        ]);

        $permission_all[] = $permission->id;

        //Permission degrestudy
        $permission = Permission::create([
            'name' => 'List degrestudy',
            'slug' => 'degrestudy.index',
            'description' => 'A user can list degrestudy',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show degrestudy',
            'slug' => 'degrestudy.show',
            'description' => 'A user can see degrestudy',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create degrestudy',
            'slug' => 'degrestudy.create',
            'description' => 'A user can create degrestudy',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit degrestudy',
            'slug' => 'degrestudy.edit',
            'description' => 'A user can edit degrestudy',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy degrestudy',
            'slug' => 'degrestudy.destroy',
            'description' => 'A user can destroy degrestudy',
        ]);

        $permission_all[] = $permission->id;

        //Permission sector
        $permission = Permission::create([
            'name' => 'List sector',
            'slug' => 'sector.index',
            'description' => 'A user can list sector',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show sector',
            'slug' => 'sector.show',
            'description' => 'A user can see sector',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create sector',
            'slug' => 'sector.create',
            'description' => 'A user can create sector',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit sector',
            'slug' => 'sector.edit',
            'description' => 'A user can edit sector',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy sector',
            'slug' => 'sector.destroy',
            'description' => 'A user can destroy sector',
        ]);

        $permission_all[] = $permission->id;

        //Permission situationproyect
        $permission = Permission::create([
            'name' => 'List situationproyect',
            'slug' => 'situationproyect.index',
            'description' => 'A user can list situationproyect',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show situationproyect',
            'slug' => 'situationproyect.show',
            'description' => 'A user can see situationproyect',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create situationproyect',
            'slug' => 'situationproyect.create',
            'description' => 'A user can create situationproyect',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit situationproyect',
            'slug' => 'situationproyect.edit',
            'description' => 'A user can edit situationproyect',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy situationproyect',
            'slug' => 'situationproyect.destroy',
            'description' => 'A user can destroy situationproyect',
        ]);

        $permission_all[] = $permission->id;

        //Permission turn
        $permission = Permission::create([
            'name' => 'List turn',
            'slug' => 'turn.index',
            'description' => 'A user can list turn',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show turn',
            'slug' => 'turn.show',
            'description' => 'A user can see turn',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create turn',
            'slug' => 'turn.create',
            'description' => 'A user can create turn',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit turn',
            'slug' => 'turn.edit',
            'description' => 'A user can edit turn',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy turn',
            'slug' => 'turn.destroy',
            'description' => 'A user can destroy turn',
        ]);

        $permission_all[] = $permission->id;

        //Permission typefile
        $permission = Permission::create([
            'name' => 'List typefile',
            'slug' => 'typefile.index',
            'description' => 'A user can list typefile',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show typefile',
            'slug' => 'typefile.show',
            'description' => 'A user can see typefile',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create typefile',
            'slug' => 'typefile.create',
            'description' => 'A user can create typefile',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit typefile',
            'slug' => 'typefile.edit',
            'description' => 'A user can edit typefile',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy typefile',
            'slug' => 'typefile.destroy',
            'description' => 'A user can destroy typefile',
        ]);

        $permission_all[] = $permission->id;

        //permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'A user can see user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'A user can edit user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'A user can destroy user',
        ]);

        $permission_all[] = $permission->id;


        //new
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'A user can see own user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'A user can edit own user',
        ]);


        /*$permission = Permission::create([
            'name' => 'Create user',
            'slug' => 'user.create',
            'description' => 'A user can create user',
        ]);

        $permission_all[] = $permission->id;
        */

        //table permission_role
        //$roladmin->permissions()->sync( $permission_all);
    }
}
