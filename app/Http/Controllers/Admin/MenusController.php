<?php

namespace App\Http\Controllers\Admin;
use App\Menu;
use App\UserMenu;
use App\Menus_level1;
use App\Menus_level2;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenusController extends Controller
{
    public function index()
    {
    	//return 'menus';
    	$menus = Menu::all(); 
    	return view('admin.menu',compact('menus'));
    }

    public function show($id)
    {
        $userMenus = UserMenu::where('userid', '1')->get();
        $menus = Menu::all();       
    /*
        $dishMenus=array();
    	$menus = Menu::all(); 
    	$userMenus = UserMenu::where('userid', '1')->get();
        foreach($userMenus as $menu){
            $dishMenus[$menu->dishKey] = $menu->dishKey;
        }
        $user_menus =  Menu::find(1)->hasManyUserMenus()->get();*/
        dd($userMenus->dishKey);
    	return view('admin.menuEdit',compact('dishMenus','menus'));
    }

    public function edit($id)
    {   
        $selectedList = array();
        $userMenus = UserMenu::where('userid', '1')->get();
        $menus = Menu::all();    
        $selectedList = explode( ',' , $userMenus[0]->dishKey );
       
        return view('admin.menuEdit',compact('selectedList','menus'));
    }

    public function update(Request $request, $id)
    {   
        $selectedList ='';

        foreach( $request->all() as $key=>$menu ){
            if($key != '_token' && $key != '_method' ){
                $selectedList = $selectedList . $key . ',';
            }
        }
       
        $userMenus = UserMenu::where('userid', '1')->get();
        $userMenus[0]->dishKey =  $selectedList;
        $userMenus[0]->update();
       
        return redirect('/admin/menu/1/edit');
    }

    public function create()
    {
        $menus = Menu::where('id','1')->get(); 
        $menusLevel_1s_part1s = Menus_level1::All(); 
        //$menusLevel_2s = menus_level2::where('parent_key','canape_addi')->get();
        //$comments = menus_level1::find('canape_addi');
        
        //print_r(count($menusLevel_1s_part1->nextLevels));
        //exit;
        //return view('admin.menuCreate',compact('menusLevel_1s','menus','comments'));
        return view('admin.menuCreate',compact('menusLevel_1s_part1s','menus'));
    }

    public function store(Request $request)
    {
        $selectedList ='';

        foreach( $request->all() as $key=>$menu ){
            if($key != '_token' ){
                $selectedList = $selectedList . $key . ',';
            }
        }

        $userMenu = new UserMenu();
        $userMenu->userid  = 1;
        $userMenu->dishKey = $selectedList;
        $userMenu->save();

        return redirect('/admin/menu/1');
    }

}
