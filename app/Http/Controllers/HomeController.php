<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Item;


class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {


    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function admin()

    {

        return view('admin.index');

    }


    /**

     * Show the my users page.

     *

     * @return \Illuminate\Http\Response

     */

    public function users()

    {

        return view('users.index');

    }

}
