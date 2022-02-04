<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:admin');
    }
    public function index()
    {
        $users = DB::table('users')
        ->join('model_has_roles', 'model_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
        ->select('users.*', 'roles.name as roles_name')
        ->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->get();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        date_default_timezone_set("America/La_Paz");
       //return $request;
      
       $users=User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => password_hash($request['password'],PASSWORD_DEFAULT),
    ]);
    
    //se agrega un rol al usuario
    if($request->roles > 0){
        $users->roles()->sync($request->roles);
        $users->save();
    }

    return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }
    public function show2()
    {
        $user=User::find(auth()->user()->id);
        return view('user.edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit',compact('user', 'roles') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        date_default_timezone_set("America/La_Paz");

         //actualiza nombre
         if($user->name <> $request->name){
            $user->name = $request->name;
        }
        //actualiza contraseña
        if($request->password <> ''){
            $user->password = bcrypt($request->password);
        }

        if($user->email <> $request->email)
            $user->email = $request->email;

        //actualiza los roles
        if($request->roles > 0){
            $user->roles()->sync($request->roles);
        }           
        $user->save(); //guardar cambios de usuario 
        return redirect()->route('admin.users.edit', $user)->with('info', 'se actualizo el usuario correctamente');;
    }
    public function update2(Request $request)
    {
        date_default_timezone_set("America/La_Paz");

        $user=User::find(auth()->user()->id);
       //actualiza nombre
       if($user->name <> $request->name){
            $user->name = $request->name;
        }
        //actualiza email
        if($user->email <> $request->email){
            $user->email = $request->email;
        }
        //actualiza contraseña
        if($request->password <> ''){
            $user->password =password_hash($request->password,PASSWORD_DEFAULT);
        }

        $user->save();
        return redirect()->route('user.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        /* $nombreRol = DB::table('roles')->where('id', '=', $user->idRol)->value('name');
        $user->removeRole($nombreRol); */
        $user->delete();
        
        return redirect()->route('admin.users.index');
    }

    
}
