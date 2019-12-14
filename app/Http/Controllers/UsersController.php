<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use  App\Http\Requests\SignupRequest;
use  App\Http\Requests\UsersRequest;

class UsersController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['users']=User::all()->toArray();
        return view('cms.index.users.user',self::$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.index.users.add_user',self::$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignupRequest $request)
    {
        User::save_new($request);
        return redirect('cms/users');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       self::$data['user_id'] = $id;
       return view('cms.index.users.delete_user',self::$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['user_item']=User::find($id)->toArray();
        return view('cms.index.users.edit_user',self::$data);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        User::update_item($request,$id);
        return redirect('cms/users');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('sm','User has been deleted!');
        return redirect('cms/users');
    }
}