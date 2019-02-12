<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 20/11/2018
 * Time: 09:50
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::paginate(10));
    }

    public function show($userId)
    {
        try {
            $user = User::find($userId);
        } catch (\Exception $e) {
            $user = null;
            $statusCode = 404;
        }
        return response(
            [
                'data' => $user,
                'status' => $user ? "success" : "Not found.",
            ], $statusCode ?? 201
        );

    }

    public function store(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        $newUser = false;

        if (!$user) {
            $newUser = true;
            $user = new User();
            $user->mname = $request->name;
            $user->email = $request->email;
            $user->password = (new BcryptHasher)->make($request->password);
            $user->save();
        }

        return response(
            [
                'data' => $user,
                'status' => ($newUser !== false) ? "success" : "user exist",
            ], 200
        );
    }

    public function create(Request $request)
    {
        $email = $request->get('email');

        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = new User();
        }

        $user->name = $request->get('name');
        $user->email = $email;
        $user->password = $request->get('password');

        if ($user->save()) {
            return 'user created';
        }
        return 'something strange has happened';

    }

}
