<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function Permission(){
        $permissions = Permission::all();
        return view('Role.AddPermission',[
            'permissions' => $permissions,
        ]);
    }
    function roleManager(){
        $permissions = Permission::all();
        $role = Role::all();
        $users = User::all();
        return view('Role.AddRole',[
            'permissions' => $permissions,
            'role' => $role,
            'users' => $users,
        ]);
    }

    function addPermission(Request $request){
        Permission::create(['name' => $request->permission]);
        return back()->with('success', 'added successfully');
    }

    function roleAdd(Request $request){
        $role = Role::create(['name' => $request->role]);
         $role->givePermissionTo($request->permission);
        return back();
    }

    function addUserRole(Request $request){
        $users = User::find($request->user_id);
        $users->assignRole($request->role_id);
        return back();
    }

    function editPermission($id){
        $permission = Permission::all();
        $user_info = User::find($id);
        return view('Role.EditRole',[
            'permission' => $permission,
            'user_info' => $user_info
        ]);
    }

    function PermissionUpdate(Request $request){
        $users = User::find($request->user_id);
        $users->syncPermissions($request->permission);
        return back();
    }




}
