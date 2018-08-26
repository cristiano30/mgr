<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

class UsersController extends Controller
{

    public function __construct()
    {
      $this->middleware('permission', ['only'=>['edit','update']

    ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::findOrFail($id);
         return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



       $user = Auth::user();
        return view('users.edit' , compact('user'));
     
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

           if (intval($id) == Auth::id()) {
              $user = User::findOrFail($id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->sex = $request->sex;
               
               if ($request->file('avatar')) {
                    $upload_path = 'public/users/' . $id . '/avatars';
                    $path = $request->file('avatar')->store($upload_path);
                    $avatar_filename = str_replace($upload_path . '/' ,'' ,$path);
                    $user->avatar = $avatar_filename ;
 
                }

                $user->save();
        }else{
            abort(403,'Brak dostępu do strony' );
        }
 
         return view('users.show',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
