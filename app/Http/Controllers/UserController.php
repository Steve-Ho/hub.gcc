<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update()
    {
        request()->user()->update(request()->only('name','mobile'));
//        request()->user()->update(request()->only('name','email'));

        return response()->json(['status' => true]);
    }

    public function show()
    {

        $data = User::all();

        $response = [];

        foreach ($data as $user){

            $object = (object) [];
            $object->name = $user->name;
            $object->mobile = $user->mobile;
            $object->email = $user->email;
            $object->role =  Role::find($user->role)->role_title;
            $object->createdBy = User::find($user->invited_by)->name;
            $object->time = date('Y/m/d h:i:s',strtotime($user->created_at));
            $object->status = $user->is_active;
            $object->id = $user->id;

            array_push($response, $object);
        }

        return array_reverse($response);
    }

    public function fetchUser()
    {
        if (Auth::check()) {
            return ['name' => Auth::user()->name,'email' => Auth::user()->email, 'mobile' =>Auth::user()->mobile ?: 'Not set up'];
        }else{
            return ['name' => 'No','email' => 'no@no.com', 'mobile' => 000];
        }
    }

    public function delete()
    {
        if (request('authId') == request('userId')){
            return response()->json(['message' => 'cannot delete own account']);
        }

        $user = User::find(request('userId'));

        if(!is_null($user)) {
            $user->delete();
            return response()->json(['message' => 'deleted']);
        }

        return response()->json(['message' => 'null']);

    }

}
