<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'owner']);
        $role2 = Role::create(['name'=>'admin']);
        $role3 = Role::create(['name'=>'musician']);
        $role4 = Role::create(['name'=>'support']);
        $role5 = Role::create(['name'=>'singer']);
        $role6 = Role::create(['name'=>'visitor']);

        Permission::create(['name'=>'songs.index'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6]);
        Permission::create(['name'=>'songs.create'])->syncRoles([$role1,$role2,$role4,$role5]);
        Permission::create(['name'=>'songs.edit'])->syncRoles([$role1,$role2,$role4,$role5]);
        Permission::create(['name'=>'songs.destroy'])->syncRoles([$role1,$role2,$role4,$role5]);
        
        Permission::create(['name'=>'songlists.index'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6]);
        Permission::create(['name'=>'songlists.create'])->syncRoles([$role1,$role2,$role4,$role5]);
        Permission::create(['name'=>'songlists.edit'])->syncRoles([$role1,$role2,$role4,$role4]);
        Permission::create(['name'=>'songlists.destroy'])->syncRoles([$role1,$role2,$role4,$role5]);

        Permission::create(['name'=>'chords.index'])->syncRoles([$role1,$role2,$role3, $role4, $role5, $role6]);
        Permission::create(['name'=>'chords.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'chords.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'chords.destroy'])->syncRoles([$role1,$role2,$role3]);
    }
}