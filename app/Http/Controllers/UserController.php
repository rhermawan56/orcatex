<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Menutransaction;
use App\Models\Submenu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $title;
    protected $menucategories, $menu, $submenu, $level, $role, $url, $patern = 'orca';

    public function __construct()
    {
        $this->url = url()->current();
    }

    protected function debuging($parameter)
    {
        dd($parameter);
    }

    protected function loginactivity()
    {
        if (Auth::user()) {
            dd('ok');
        } else {
            return redirect('orca/login');
        }
    }

    protected function loadmenu()
    {
        if (Auth::user()) {
            $this->menucategories = DB::table('menutransactions as ms')
                ->select(DB::raw('distinct(m.menucategory_id), m.menucategory_id as category, mcat.menucategory, m.id'))
                ->join('menus as m', 'ms.menu_id', '=', 'm.id')
                ->join('menucategories as mcat', 'mcat.id', '=', 'm.menucategory_id')
                ->groupBY('m.menucategory_id')
                ->where('ms.user_id', Auth::user()->id)
                ->get();

            $this->menu = DB::table('menutransactions as ms')
                ->select(DB::raw('distinct(ms.menu_id), m.menu, m.menucategory_id'))
                ->join('menus as m', 'ms.menu_id', '=', 'm.id')
                ->where('ms.user_id', Auth::user()->id)
                ->get();

            $this->submenu = DB::table('menutransactions as ms')
                ->select(DB::raw('ms.id, sm.submenu, sm.menu_id, sm.link'))
                ->join('submenus as sm', 'sm.id', '=', 'ms.submenu_id')
                ->where('ms.user_id', Auth::user()->id)
                ->get();
        } else {
            return redirect('orca/login');
        }
    }

    protected function rolelevel()
    {
        if (Auth::user()) {
            $data = Auth::user();
            $this->role = $data->role->role;
            $this->level = $data->userlevel->level;
        } else {
            return redirect('orca/login');
        }
    }

    public function index()
    {
        if (Auth::user()) {
            $this->rolelevel();
            $this->loadmenu();

            $path = explode('/',$this->url);
            $path_index = array_search($this->patern, $path);
            $path_index += 1;
            $path = $path[$path_index];

            $rulemenu = Submenu::where('path','=',"$path")->first();
            
            $rulemenutransaction = Menutransaction::where(array(
                'user_id' => Auth::user()->id,
                'menu_id' => $rulemenu->menu_id,
                'submenu_id' => $rulemenu->id
            ))->first();

            switch ($this->role) {
                case 'IT':
                    $user = User::all();
                    break;

                default:
                    $user = User::where('role_id', '=', Auth::user()->role_id)->get();
                    break;
            }

            return view('useraccount.index', array(
                'title' => 'User Account',
                'menucategories' => $this->menucategories,
                'menu' => $this->menu,
                'submenu' => $this->submenu,
                'data' => array(
                    'user' => $user,
                    'rulemenu' => $rulemenu,
                    'rulemenutransaction' => $rulemenutransaction
                )
            ));
        } else {
            return redirect('orca/login');
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
    */

    public function show($user)
    {
        if (Auth::user()) {        
            $path = explode('/',$this->url);
            $path_index = array_search($this->patern, $path);
            $path_index += 1;
            $path = $path[$path_index];

            $this->loadmenu();
            // decrypt process
            $dyc = Crypt::decryptString($user);
            $dyc = explode(':', $dyc);
            $dyc = $dyc[2];
            $dyc = substr($dyc, 1, -2);
            $dyc = explode('_', $dyc);
            // end decrypt process

            $rulemenu = Submenu::where('path','=',"$path")->first();
            
            $rulemenutransaction = Menutransaction::where(array(
                'user_id' => Auth::user()->id,
                'menu_id' => $rulemenu->menu_id,
                'submenu_id' => $rulemenu->id
            ))->first();

            $user = User::where(array(
                'id' => "$dyc[0]",
                'karyawan_id' => "$dyc[1]"
            ))->get();

            return view('useraccount.view', [
                'title' => 'User Account',
                'menucategories' => $this->menucategories,
                'menu' => $this->menu,
                'submenu' => $this->submenu,
                'data' => array(
                    'user' => $user,
                    'rulemenu' => $rulemenu,
                    'rulemenutransaction' => $rulemenutransaction
                )
            ]);
        } else {
            return redirect('orca/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
