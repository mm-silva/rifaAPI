<?php

namespace App\Http\Controllers\Awards;

use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class AwardController extends Controller
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


    public function index()
    {
        try {



        } catch (\Exception $e) {

            return response()->json(['message' => 'user not found!'], 404);
        }

    }

}
