<?php

  /**
   * @name:        Admin controller
   * @author:      Zaid - Patrik - Henry
   * @description: Controller of role Admin , all functions in the view of admin and only the admin can see the content of this view.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Club;
use App\Bills;
use DB;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');// if the user not registred and his role not admin he can't see the admin view
         //$this->middleware('client');
         //$this->middleware('manager');
     }

    /**
     * Show the first view when admin is logged + numbers of admins, clients and managers in the database
     *
     * @return Admin view
     */
    public function index()
    {
        $admin = User::where('role','admin')->count();
        $client = User::where('role','client')->count();
        $manager = User::where('role','manager')->count();
        return view('admin',compact('admin'),compact('manager'))->with('client',$client);
    }

    /**
     * list admins from the database
     *
     * @return list admin view + list of admins
     */
    public function Listadmin()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','admin')->paginate(5);

        return view('admin/listadmin',compact('users'));
    }

    /**
     * list clients from the database
     *
     * @return list client view + list of clients
     */
    public function Listusers()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','client')->paginate(5);

        return view('admin/listusers',compact('users'));
    }

    /**
     * list managers from the database
     *
     * @return list manager view + list of managers
     */
    public function Listmanagers()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','manager')->paginate(5);

        return view('admin/listmanagers',compact('users'));
    }

    /**
     * Delete user from the database
     *
     * @return Admin view + success message
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin')->with('success','User deleted');
    }

    /**
     * Show the form to add manager to the database
     *
     * @return addmanager view
     */
    public function Addmanager()
    {
        return view('admin/addmanager');
    }

    /**
     * Add manager to the database with validate data
     *
     * @return admin view + success message
     */
    public function ConfirmAddManager(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:100'],
            'birthdate' => ['required', 'string', 'max:20'],
            'city'=> ['required'],
            'phone' => ['required', 'integer','unique:users'],
            'username' => ['required', 'string', 'max:50','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
          ]);

        User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'surname' => $request['surname'],
            'streetname' => 'street',
            'streetnumber' => 0,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'postal_code' => 0,
            'role' => 'manager',
            'phone' => $request['phone'],
            'birthdate' => $request['birthdate'],
            'city' => $request['city'],
            'image_profile' => 'image',
        ])->save();
        return redirect()->route('admin')->with('success','Manager added');

    }

    /**
     * Show the form to add admin to the database
     *
     * @return addadmin view
     */
    public function Addadmin()
    {
        return view('admin/addadmin');
    }


    /**
     * Add admin to the database with validate data
     *
     * @return admin view + success message
     */
    public function ConfirmAddAdmin(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:100'],
            'birthdate' => ['required', 'string', 'max:20'],
            'city'=> ['required'],
            'phone' => ['required', 'integer','unique:users'],
            'username' => ['required', 'string', 'max:50','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
          ]);

        User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'surname' => $request['surname'],
            'streetname' => 'street',
            'streetnumber' => 0,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'postal_code' => 0,
            'role' => 'admin',
            'phone' => $request['phone'],
            'birthdate' => $request['birthdate'],
            'city' => $request['city'],
            'image_profile' => 'image',
        ])->save();
        return redirect()->route('admin')->with('success','Admin added');
    }

    /**
     * List clubs from the database
     *
     * @return listclubs view + list of clubs + list of manager
     */
    public function Listclubs()
    {
        $clubs = Club::paginate(5);
        $manager = User::All();
        //$clubs = DB::table('clubs')->join('users','users.id','=','clubs.userid')->select('clubs.*','users.username')->get();
        return view('admin/listclubs',compact('clubs'),compact('manager'));
    }

    /**
     * Show the form to add club to the database
     *
     * @return addclub view
     */
    public function Addclub()
    {
        $users = User::where('role','manager')->get();
        return view('admin/addclub',compact('users'));
    }

    /**
     * Add club to the database with validate data
     *
     * @return admin view + success message
     */
    public function ConfirmAddClub(Request $request)
    {

        $this->validate($request, [
            'clubname' => ['required', 'string', 'max:100'],
            'streetname' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string'],
            'ambience' => ['required', 'string'],
            'city'=> ['required'],
            'userid'=> ['required'],
            'phone' => ['required', 'integer','unique:clubs'],
            'streetnumber' => ['required', 'integer'],
            'dress_code' => ['required', 'string'],
            'cover_url' => ['required', 'string'],
            'opening_time' => ['required', 'string'],
            'closing_time' => ['required', 'string'],
            'lat' => ['required', 'string'],
            'lng' => ['required', 'string'],
          ]);

        Club::create([
            'clubname' => $request['clubname'],
            'streetname' => $request['streetname'],
            'streetnumber' => $request['streetnumber'],
            'postal_code' => $request['postal_code'],
            'city' => $request['city'],
            'description' => $request['description'],
            'ambience' => $request['ambience'],
            'dress_code' => $request['dress_code'],
            'phone' => $request['phone'],
            'cover_url' => $request['cover_url'],
            'opening_time' => $request['opening_time'],
            'closing_time' => $request['closing_time'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],
            'userid' => $request['userid'],
        ])->save();
        return redirect()->route('admin')->with('success','Club added');
    }

    /**
     * List admins from the database to delete
     *
     * @return deleteadmin view + list of admins
     */
    public function deleteadmin()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','admin')->paginate(5);

        return view('admin/deleteadmin',compact('users'));
    }

    /**
     * List clients from the database to delete
     *
     * @return deleteclient view + list of clients
     */
    public function deleteclient()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','client')->paginate(5);

        return view('admin/deleteclient',compact('users'));
    }

     /**
     * List managers from the database to delete
     *
     * @return deletemanager view + list of managers
     */
    public function deletemanager()
    {
        //$count = User::where('role','admin')->get();

        $users = User::where('role','manager')->paginate(5);

        return view('admin/deletemanager',compact('users'));
    }

        /**
    *
    */
    public function profileAdmin() {
        return view('admin/profileadmin');
    }
    /**
     *
     */
    public function ViewModifyAdmin(){
        return view('admin/modifyadmin');
    }
    /**
     *
     */
    public function UpdateProfileAdmin(Request $request, $id){

        //$request->validate(['name' => 'required','surname'=>'required','username'=>'required','tel'=>'required','street'=>'required','numberst'=>'required','postalcode'=>'required','city'=>'required']);
        // dd($request);
        // $request->validate([
        //     'name' => ['required', 'string', 'max:50'],
        //     'surname' => ['required', 'string', 'max:100'],
        //     'username' => ['required', 'string', 'max:50','unique:users'],
        //     'phone' => ['required', 'integer','unique:users'],
        //     'street' => ['required'],
        //     'numberst' => ['required'],
        //     'postalcode' => ['required'],
        //     'city' => ['required'],
        // ]);

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'numberst' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
        ]);

        //attributes
        $name = $request->input('name');
        $surname = $request->input('surname');
        $username = $request->input('username');
        $phone = $request->input('phone');
        $street = $request->input('street');
        $numberst = $request->input('numberst');
        $postal_code = $request->input('postal_code');
        $city = $request->input('city');
        DB::update('UPDATE users SET name =? , surname = ?, username = ?, phone = ?, streetname=?, streetnumber=?, postal_code=?, city=? WHERE id = ?',[$name,$surname,$username,$phone,$street,$numberst,$postal_code,$city,$id]);
        return redirect('/profileadmin')->with('message','Admin modificado');
    }

    public function listBills(){
        $bills= DB::table('bills')
                            ->join('clubs','clubs.id','=','bills.clubid')
                            ->join('users','users.id','=','clubs.userid')
                            ->select('bills.nameClub','bills.manager','users.email','clubs.streetname','clubs.streetnumber','clubs.postal_code','clubs.city','bills.date','bills.balance')
                            ->get();
                return view('admin/listbills',compact('bills'));
    }
}
