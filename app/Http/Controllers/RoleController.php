<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function assign()
    {
        Role::firstOrCreate(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole('admin');

        return "Role assigned!";
    }
}
