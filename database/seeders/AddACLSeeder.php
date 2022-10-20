<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddACLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Roles
       $adminACL = \App\Role::firstOrCreate(['name'=>'Admin'],['description'=>'Função de Administrador']);

       // User com Role
       $userAdmin = \App\User::find('1');

       $userAdmin->roles()->attach($adminACL);

       // Permissions
       $listUser = \App\Permission::firstOrCreate(['name'=>'list-user'],['description'=>'Listar registros']);
       $createUser = \App\Permission::firstOrCreate(['name'=>'create-user'],['description'=>'Criar registro']);
       $editUser = \App\Permission::firstOrCreate(['name'=>'edit-user'],['description'=>'Editar registro']);
       $showUser = \App\Permission::firstOrCreate(['name'=>'show-user'],['description'=>'Visualizar registro']);
       $deleteUser = \App\Permission::firstOrCreate(['name'=>'delete-user'],['description'=>'Deletar registro']);
       $acessoACL = \App\Permission::firstOrCreate(['name'=>'acl'],['description'=>'Acesso ao ACL']);


       echo "Registro de ACL criados! \n";
   }
}
