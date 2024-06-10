<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menutransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $menucategories, $menu, $submenu, $role, $level;

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
    
    public function loadmenu() {
        if (Auth::user()) {
            $this->menucategories = DB::table('menutransactions as ms')
            ->select(DB::raw('distinct(m.menucategory_id), m.menucategory_id as category, mcat.menucategory, m.id'))
            ->join('menus as m', 'ms.menu_id','=','m.id')
            ->join('menucategories as mcat', 'mcat.id','=','m.menucategory_id')
            ->groupBY('m.menucategory_id')
            ->where('ms.user_id', Auth::user()->id)
            ->get();
            
            $this->menu = DB::table('menutransactions as ms')
                ->select(DB::raw('distinct(ms.menu_id), m.menu, m.menucategory_id'))
                ->join('menus as m', 'ms.menu_id','=','m.id')
                ->where('ms.user_id', Auth::user()->id)
                ->get();

            $this->submenu = DB::table('menutransactions as ms')
                ->select(DB::raw('ms.id, sm.submenu, sm.menu_id, sm.link'))
                ->join('submenus as sm', 'sm.id','=','ms.submenu_id')
                ->where('ms.user_id', Auth::user()->id)
                ->get();
        } else {
            return redirect('orca/login');
        }
    }

    protected function rolelevel()
    {
        $data = Auth::user();
        $this->role = $data->role->role;
        $this->level = $data->userlevel->level;
    }
    
    public function index()
    {
        if (Auth::user()) {
            $this->loadmenu();

            return view('main',array(
                'title' => 'Dashboard',
                'menucategories' => $this->menucategories,
                'menu' => $this->menu,
                'submenu' => $this->submenu
            ));
        } else {
            return redirect('orca/login');
        }
    }

    public function useraccount() {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
