<?php

/**
   * @name:        Home controller
   * @author:      Zaid - Patrik - Henry
   * @description: Controller of home page , all users can see the content of this view.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Product;
use DB;
use Mail;
use Session;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    /*public function __construct()
     {
         $this->middleware('auth');
     }*/

    /**
     * List all the clubs from database in the homepage
     *
     * @return welcome view + list of all clubs
     */
    public function index()
    {
        $clubs = Club::all();
        //$locations = DB::table('location')->get();
        //$users = User::all();
    return view('welcome', ['clubs' => $clubs]/*,compact('locations')*/);
    }

    /**
     * Send data of clubs from database to gmaps view.
     *
     * @return gmaps view + data of all club
     */
    public function gmaps()
    {
    	$clubs = DB::table('clubs')->get();
    	return view('gmaps',compact('clubs'));
    }

    /**
     * The club view of home page + the view of club by id and his google map + products that belongs to this club
     *
     * @return home.show view + club by id + google map by latitud and longitud from the database + products from the database
     */
    public function getShow($id)
    {
        $club = Club::find($id);
        $clubmap = DB::table('clubs')->where('id',$id)->get();
        $products = Product::where('clubid', $id)->get();
        return view('home.show', ['club' => $club], ['products' => $products], array(
            'id' => $id
        ))->with('clubmap',$clubmap);
    }

    /**
     * Contact form of home page , the visitor can send the mail to our Wolpray mail
     *
     * @return homepage view + success message
     */
    public function contact(Request $request){
        $mensaje = '<div class="text-info">Mensaje enviado con éxito</div>';
        $fromEmail = "wolpraycompany@gmail.com";
        $fromName = 'WolPray';
        Mail::send('emails.contact',$request->all(), function($msj) use($fromName,$fromEmail){
            $msj->to($fromEmail, $fromName);
            $msj->subject("Correo de Contacto.");
        });

        $request->session()->flash('message', $mensaje);
        return redirect('/')->with('message','Mensaje enviado con éxito');
    }

    public function gmapshow()
    {
        $club = DB::table('clubs')->where('id','2')->get();
        return view('home.gmapshow', ['club' => $club]);
    }
}
