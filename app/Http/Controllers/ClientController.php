<?php

/**
   * @name:        Client registred controller
   * @author:      Zaid - Patrik - Henry
   * @description: Controller of role Client , all functions in the view of client and only the client registred can see the content of this view.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Club;
use App\Product;
use App\Reservation;
use App\Invoice;
use DB;
use Mail;
use Session;
use Redirect;
class ClientController extends Controller
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
    public function index()
    {
        $clubs = Club::all();
        //$users = User::all();
        return view('client', ['clubs' => $clubs] /*,['users' => $users]*/);
    }


    public function modifyClient()
    {
        return view('client/modifyclient');
    }

    /**
     *
     */
    public function deleteClient()
    {
        return redirect()->route('/')->with('success','Cliente borrado.');
    }

    /**
     *
     */
    public function listClubs()
    {
        return view('client/listclubs');
    }

    /**
     * show the reservations from the database of client logged
     *
     * @return listmyreservations view + list of reservations
     */
    public function listMyReservations()
    {
        $clubs = Club::all();
        $reservations = Reservation::all();

        return view('client/listmyreservations', ['reservations' => $reservations], ['clubs' => $clubs]);
    }

    /**
     * show the invoices from the database of client logged
     *
     * @return listmybills view + list of invoices
     */
    public function listMyBills()
    {
        $invoices = Invoice::all();
        $clubs = Club::all();
        $products = Product::all();

        return view('client/listmybills', ['products' => $products, 'invoices' => $invoices, 'clubs' => $clubs]);
    }

    /**
     * Delete the account of client logged
     *
     * @return welcomepage view
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }

    /**
     * Contact form of client registred home page , the client can send the mail to our Wolpray mail
     *
     * @return clienthomepage view + success message
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
        return redirect('/client')->with('message','Mensaje enviado con éxito');
    }

    /**
    *
    */
    public function profileClient() {
        return view('client/profileclient');
    }
    /**
     *
     */
    public function ViewModifyClient(){
        return view('client/modifyclient');
    }
    /**
     *
     */
    public function UpdateProfileClient(Request $request, $id){
        $request->validate(['name' => 'required','surname'=>'required','username'=>'required','tel'=>'required','street'=>'required','numberst'=>'required','postal_code'=>'required','city'=>'required']);
        //attributes
        $name = $request->input('name');
        $surname = $request->input('surname');
        $username = $request->input('username');
        $tel = $request->input('tel');
        $street = $request->input('street');
        $numberst = $request->input('numberst');
        $postal_code = $request->input('postal_code');
        $city = $request->input('city');
        DB::update('UPDATE users SET name =? , surname = ?, username = ?,phone = ?, streetname=?, streetnumber=?, postal_code=?, city=? WHERE id = ?',[$name,$surname,$username,$tel,$street,$numberst,$postal_code,$city,$id]);
        return redirect('dropdown/modifyclient')->with('message','Has modificado correctamente tu cuenta');
    }
}

