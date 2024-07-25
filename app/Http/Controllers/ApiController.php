<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
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
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
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
        // $user = User::find($id);

        // if (!$user) {
        //     return response()->json(null, 404);
        // }
        // return response()->json([
        //     'id' => $user->id,
        //     'name' => $user->name,
        //     'email' => $user->email
        // ]);

        return new UserResource(User::findOrFail($id));
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
        $user->name = $request['name'];
        $user->email = $request['email'];

        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'user updated',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(null, 404);
        }

        $user->delete();

        return response()->json([
            'status' => 204,
            'message' => 'user deleted'
        ], 204);
    }
}
