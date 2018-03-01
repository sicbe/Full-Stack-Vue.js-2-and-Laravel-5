<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function toggle_saved(Request $request)
    {
        $id = $request->id;
        $user = Auth::user();
        $saved = $user->saved;
        $key = array_search($id, $saved);
        if ($key === false) {
            array_push($saved, $id);
        } else {
            array_splice($saved, $key, 1);
        }
        $user->saved = $saved;
        $user->save();
        return response()->json();
    }
}
