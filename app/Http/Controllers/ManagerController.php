<?php


/**
   * @name:        Manager controller
   * @author:      Zaid - Patrik - Henry
   * @description: Controller of role Manager , all functions in the view of manager and only the manager can see the content of this view.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Club;
use App\Product;
use App\Table;
use App\Reservation;


class ManagerController extends Controller
{

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');// if the user not registred and his role not manager he can't see the manager view
    }

    /**
     * Show the first view when manager is logged + His club cover
     *
     * @return Manager view
     */
   public function index()
   {
        $clubs = Club::All();

        return view('manager', compact('clubs'));
   }

    /**
     * Show the data of his account from the database
     *
     * @return profilemanager view
     */
   public function profileManager() {
       return view('manager/profilemanager');
   }

   /**
    *
    */
   public function modifyManager() {
       return view('manager/modifymanager');
   }

    /**
     * Update his account with validate data
     *
     * @return profilemanager view + manager updated
     */
   public function updateManager(Request $request, $id) {
        //Params.
        $request->validate([
            'username' => ['required', 'string', 'max:50','unique:users'],
            'nombre' => ['required', 'string', 'max:50'],
            'apellido' => ['required', 'string', 'max:100'],
            'telefono' => ['required', 'integer'],
        ]);

        //Attributes.
        $username = $request->input('username');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $telefono = $request->input('telefono');

        DB::update('UPDATE users SET username = ?, phone = ?, name = ?, surname = ? WHERE id = ?', [$username, $telefono, $nombre, $apellido, $id]);

        //Result.
        return redirect('/modifymanager')->with('message','Manager modificado');
   }


    /**
     * Show the data of club that belongs to the manager logged
     *
     * @return clubmanager view + data of club
     */
   public function clubManager() {
        $clubs = Club::All();

        return view('manager/clubmanager', compact('clubs'));
   }

    /**
     * Show the form of club that belongs to the manager logged to update
     *
     * @return modifyclub view + data of club
     */
   public function modifyClub() {
       $clubs = Club::All();

       return view('manager/modifyclub', compact('clubs'));
   }


    /**
     * update club that belongs to the manager logged with validate data
     *
     * @return clubmanager view + club updated
     */
   public function updateClub(Request $request, $id) {
        //Params.
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'ambiente' => 'required',
            'codigoDeVestimenta' => 'required',
            'callePlazaAvenida' => 'required',
            'numeroDeCalle' => 'required',
            'telefono' => 'required',
            'horarioDeApertura' => 'required',
            'horarioDeCierre' => 'required'
        ]);

        //Attributes.
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $ambiente = $request->input('ambiente');
        $codigoDeVestimenta = $request->input('codigoDeVestimenta');
        $callePlazaAvenida = $request->input('callePlazaAvenida');
        $numeroDeCalle = $request->input('numeroDeCalle');
        $telefono = $request->input('telefono');
        $horarioDeApertura = $request->input('horarioDeApertura');
        $horarioDeCierre = $request->input('horarioDeCierre');

        DB::update('UPDATE clubs SET clubname = ?, streetname = ?, streetnumber = ?, description = ?, ambience = ?, dress_code = ?, phone = ?, opening_time = ?, closing_time = ? WHERE id = ?', [$nombre, $callePlazaAvenida, $numeroDeCalle, $descripcion, $ambiente, $codigoDeVestimenta, $telefono, $horarioDeApertura, $horarioDeCierre ,$id]);

        //Result.
        return redirect('/clubmanager');
   }

    /**
     * Show the products of club that belongs to the manager logged
     *
     * @return productmanager view + data of club + list of products
     */
   public function productManager() {
        $clubs = Club::All();
        $products = Product::All();

        return view('manager/productmanager', compact('clubs'), compact('products'));
   }

    /**
     * Show form of product to add
     *
     * @return addproduct view + club to add
     */
   public function addProduct() {
       $clubs = Club::All();
       return view('manager/addproduct',compact('clubs'));
   }

    /**
     * Add product to the database with validate data
     *
     * @return addproduct view + success message
     */
   public function ConfirmAddProduct(Request $request)
   {

       $this->validate($request, [
           'productname' => ['required', 'string'],
           'description' => ['required', 'string'],
           'price' => ['required'],
           'category'=> ['required'],
         ]);

       Product::create([
           'productname' => $request['productname'],
           'description' => $request['description'],
           'price' => $request['price'],
           'image' => $request['image'],
           'category' => $request['category'],
           'status' => 1,
           'clubid' => $request['clubid'],
       ])->save();
       return redirect()->route('addproduct')->with('success','Producto Added');
   }


    /**
     * Show form of ticket to add
     *
     * @return addticket view + club to add
     */
    public function addTicket() {
        $clubs = Club::All();
        return view('manager/addticket',compact('clubs'));
    }

    /**
     * Add ticket to the database with validate data
     *
     * @return addticket view + success message
     */
    public function ConfirmAddTicket(Request $request)
    {

        $this->validate($request, [
            'productname' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required'],
            'category'=> ['required'],
          ]);

        Product::create([
            'productname' => $request['productname'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image'],
            'category' => $request['category'],
            'status' => 1,
            'clubid' => $request['clubid'],
        ])->save();
        return redirect()->route('addticket')->with('success','Ticket Added');
    }

   /**
    *
    */
   public function modifyProduct() {
        $clubs = Club::All();
        $products = Product::All();

        return view('manager/modifyproduct', compact('clubs'), compact('products'));
   }

   /**
    *
    */
   public function modifySingleProduct($id) {
        $product = DB::table('products')
        ->where('id', $id)
        ->get();

        return view('manager/modifysingleproduct', compact('product'));
   }

   /**
    *
    */
   public function updateProduct(Request $request, $id) {
        //Params.
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'estado' => 'required',
            'precio' => 'required'
        ]);

        //Attributes.
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $categoria = $request->input('categoria');
        $estado = $request->input('estado');
        $precio = $request->input('precio');

        DB::update('UPDATE products SET productname = ?, description = ?, price = ?, category = ?, status = ? WHERE id = ?', [$nombre, $descripcion, $precio, $categoria, $estado ,$id]);

        //Result.
        return redirect('/productmanager');
   }

    /**
     * List of products to be deleted from the database
     *
     * @return deleteproduct view + products that belongs to this manager/club
     */
   public function deleteProduct() {

        $clubs = Club::All();
        $products = Product::All();

        return view('manager/deleteproduct', compact('clubs'), compact('products'));
   }

    /**
     * delete product from database
     *
     * @return deleteproduct view + success message
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('deleteproduct')->with('success','Producto deleted');
    }

    /**
     * List tables of club from database
     *
     * @return tablemanager view + tables that belongs to this manager/club
     */
   public function tableManager() {
    $clubs = Club::All();
    $tables = Table::All();

    return view('manager/tableManager', compact('clubs'), compact('tables'));
   }


   public function ListReservations(){
        $clubs = Club::All();
        $reservations = Reservation::All();
        return view('manager/listreservation', compact('clubs'), compact('reservations'));
    }


}
