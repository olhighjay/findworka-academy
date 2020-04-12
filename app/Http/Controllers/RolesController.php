<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;

class RolesController extends Controller
{
    public function indexRoles()
    {
        $roles= Role::orderBy('created_at','desc')->get();
        return view('admin.roles.list')->with('roles', $roles);
    }

    public function createRoles()
    {
        $permissions= Permission::all();
        return view('admin.roles.new')->with('permissions', $permissions);
    }


    public function storeRoles(Request $request)
    {

        $this->validate($request, [
            'name'=> 'required',
        ]);
        
        
        #To save the request data in role table
        $role= new Role();
        $role->name= $request->get('name');
        $role->display_name= $request->get('name');
        $role->save();
        $permissions= $request->get('permissions');

        #To link permission table to role
        
            foreach($permissions as $permission){
                $role->attachPermission($permission);
            }
            return redirect('admin/roles')->with('success', 'Role has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRoles($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRoles($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRoles(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRoles($id)
    {
        //
    }
}


