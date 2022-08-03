<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StorePostRequest_Reg;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function RegisterView()
    {

       return view('auth.RegisterUser');
    }
    public function LoginView()
    {

       return view('auth.LoginUser');
    }


    public function register(StorePostRequest $request)
    {

        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->Password)

        ]);

            return back()->with('success','you have register ');

    }




    public function login(StorePostRequest_Reg $request)
    {
        // if(!Auth::guard('web')->check()){
        //     if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){
        //         return Redirect(route('THE_HOME'));
        //     }else{
        //         dump(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        //         dd($request->all());
        //         return Redirect()->back()->with(['fail'=>'something is wrong']);
        //     };
        // }
        dd(Auth::check());
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
