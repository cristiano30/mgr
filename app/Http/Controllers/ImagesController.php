<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class ImagesController extends Controller
{  
    public function user_avatar($id,$size){

        $user = User::findOrFail($id);
if(is_null($user->avatar)){
	$img = Image::make('https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png')->fit($size)->response('jpg',100);
}else{

        $avatar_path = asset('storage/users/'. $id . '/avatars/' . $user->avatar);
        $img = Image::make($avatar_path)->fit($size)->response('jpg',100);
}
        return $img;
    }}