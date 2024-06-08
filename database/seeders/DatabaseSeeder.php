<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Userlevel;
use App\Models\Role;
use App\Models\Subrole;
use App\Models\Karyawan;
use App\Models\Biodata;
use App\Models\Menu;
use App\Models\Menucategory;
use App\Models\Submenu;
use App\Models\Menutransaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Userlevel::create([
            'level' => 'Administrator'
        ]);
        Userlevel::create([
            'level' => 'Admin Management'
        ]);
        Userlevel::create([
            'level' => 'User'
        ]);
        Role::create([
            'role' => 'ALL'
        ]);
        Role::create([
            'role' => 'IT'
        ]);
        Role::create([
            'role' => 'HRD'
        ]);
        Role::create([
            'role' => 'TEKNIK'
        ]);
        Subrole::create([
            'role_id' => '2',
            'subrole' => 'IT Programmer',
        ]);
        Subrole::create([
            'role_id' => '2',
            'subrole' => 'IT Support',
        ]);
        Subrole::create([
            'role_id' => '2',
            'subrole' => 'Database Administrator',
        ]);
        Subrole::create([
            'role_id' => '3',
            'subrole' => 'Payroll',
        ]);
        Subrole::create([
            'role_id' => '4',
            'subrole' => 'Recruitment',
        ]);
        Biodata::create([
            'nik' => '3204261904950002',
            'nama_lengkap' => 'Rizky Hermawan',
            'jenis_kelamin' => '1',
            'tempat_lahir' => 'Sukabumi',
            'tanggal_lahir' => '1995-04-19',
            'alamat_domisili' => 'Bogor',
            'alamat_ktp' => 'Bandung',
            'status_pernikahan' => 'Tidak Kawin',
            'status_tempat_tinggal' => '2'
        ]);
        Karyawan::create([
            'biodata_id' => '1',
            'nip' => '2405020001',
            'status' => '1',
            'status_mess' => '1',
            'tanggal_masuk' => '2024-05-10',
            'keterangan_masuk' => 'dibutuhkan',
        ]);
        User::create([
            'userlevel_id' => '1',
            'role_id' => '2',
            'karyawan_id' => '1',
            'username' => 'aqew',
            'name' => 'Rizky Hermawan',
            'email' => 'rhermawan56@gmail.com',
            'password' => bcrypt('aqew123'),
            'status' => '1',
        ]);
        Menucategory::create([
            'menucategory' => 'User Management'
        ]);
        Menu::create([
            'role_id' => '1',
            'menucategory_id' => '1',
            'menu' => 'User Controls',
        ]);
        Submenu::create([
            'menu_id' => '1',
            'submenu' => 'User Account',
            'link' => "/orca/users/useraccount",
            'path' => 'useraccount'
        ]);
        Submenu::create([
            'menu_id' => '1',
            'submenu' => 'User Menu',
            'link' => '/orca/users/usermenu',
            'path' => 'usermenu'
        ]);
        Menutransaction::create([
            'user_id' => '1',
            'menu_id' => '1',
            'submenu_id' => '1',
            'create' => 'Y',
            'modify' => 'Y',
            'delete' => 'Y',
        ]);
        Menutransaction::create([
            'user_id' => '1',
            'menu_id' => '1',
            'submenu_id' => '2',
            'create' => 'Y',
            'modify' => 'Y',
            'delete' => 'Y',
        ]);
    }
}
