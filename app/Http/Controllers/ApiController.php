<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $new_user = User::create([
            'name' => $validator->input('name'),
            'email' => $validator->input('email'),
            'password' => Hash::make($validator->input('password'))
        ]);

        return response()->json([
            'id' => $new_user->id,
            'name' => $new_user->name,
            'email' => $new_user->email
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(null, 404);
        }
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(null, 404);
        }

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:dns'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //jika berhasil
        $user->name = $validator->input('name');
        $user->email = $validator->input('email');

        $user->save();

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
