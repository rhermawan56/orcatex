<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Menutransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $title;
    protected $menucategories, $menu, $submenu, $level, $role;

    protected function debuging($parameter) {
        dd($parameter);
    }

    protected function loginactivity() {
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
        // dd(bcrypt('123456'));
        return view('login.login', [
            'title' => 'User Account'
        ]);
    }

    public function useraccount()
    {
        if (Auth::user()) {
            $this->rolelevel();
            $this->loadmenu();

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
                    'user' => $user
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
        if (Auth::user()) {
            $this->rolelevel();
            $this->loadmenu();
    
            return view('useraccount.create', array(
                'title' => 'User Account',
                'menucategories' => $this->menucategories,
                'menu' => $this->menu,
                'submenu' => $this->submenu,
                'data' => array(
                    'employees' => Karyawan::all()
                )
            ));
        } else {
            return redirect('orca/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $data = array(
            'username' => $request->username,
            'password' => $request->password,
            'status' => '1'
        );

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/orca/main');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Auth::user()) {
        $this->loadmenu();
        // decrypt process
        $dyc = Crypt::decryptString($id);
        $dyc = explode(':', $dyc);
        $dyc = $dyc[2];
        $dyc = substr($dyc, 1, -2);
        $dyc = explode('_', $dyc);
        // end decrypt process

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
                'user' => $user
            )
        ]);
        } else {
            return redirect('orca/login');
        }
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
