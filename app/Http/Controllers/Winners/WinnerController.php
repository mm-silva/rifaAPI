<?php

namespace App\Http\Controllers\Winners;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class WinnerController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function update($id)
    {
        try {

            User::findOrFail($id)->update(["name" => "Clebi"]);

            $user = User::findOrFail($id);

            return response()->json(['user' => $user], 200);

        } catch (\Exception $e) {

            return response()->json(['message' => 'user not found!'], 404);
        }

    }

}
