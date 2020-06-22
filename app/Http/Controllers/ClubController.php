<?php

/**
   * @name:        Club controller
   * @author:      Zaid - Patrik - Henry
   * @description: this controller belongs to role Client , all functions in the view of client and only the client registred can see the content of this view.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Club;
use App\User;
use App\Product;
use DB;
use Mail;

class ClubController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');// if the user not registred and his role not client he can't see the client view
    }

    /**
     * The homepage of client registred + the list of all clubs in the database
     *
     * @return client view + list of clubs
     */
    public function getIndex()
    {
        $clubs = Club::all();
        //$users = User::all();
        return view('client', ['clubs' => $clubs] /*,['users' => $users]*/);
    }

    /**
     * The club view of client registred + the view of club by id and his google map
     *
     * @return clientshowclub view + club by id + google map by latitud and longitud from the database
     */
    public function getShow($id)
    {
        $club = Club::find($id);
        $clubmap = DB::table('clubs')->where('id',$id)->get();
        $products = Product::where('clubid', $id)->get();
        return view('client.show', ['club' => $club], ['products' => $products], array(
            'id' => $id
        ))->with('clubmap',$clubmap);
    }
}
