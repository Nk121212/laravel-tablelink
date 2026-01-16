<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNull('deleted_at')
            ->paginate(10);
        
        return response()->json($users);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->update($request->validated());
        
        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return response()->json([
            'message' => 'User soft deleted successfully',
        ]);
    }
}
