<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;

class HomeOwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homeOwner');
    }
    
    public function addItem() {
        
        if (isset($_GET['send'])) {
            $menuItem               = new MenuItem();
            $menuItem->name         = $_GET['name'];
            $menuItem->image        = $_GET['image'];
            $menuItem->price        = $_GET['price'];
            $menuItem->save();
        }
        
        return view('addItemMenu');
    }
    
    public function deleteItem() {
        
        $menuItem                   = new MenuItem();
        
        if (isset($_GET['delete'])) {
            $menuItem->where('id', '=', $_GET['delete'])->delete();
        }
        
        $selectAllItem              = $menuItem->get();
        
        return view('deleteItemMenu', compact('selectAllItem'));
    }
    
    public function editItem() {
        
        $menuItem                   = new MenuItem();
        
        if (isset($_GET['update'])) {
            $menuItem   ->where('id', '=', $_GET['id'])
                        ->update([
                                'name'  => $_GET['name'],
                                'image' => $_GET['image'],
                                'price' => $_GET['price']
                            ]);
        }
        
        $selectAllItem              = $menuItem->get();
        
        return view('editItemMenu', compact('selectAllItem'));
    }
    
    public function editStepItem() {
        
        $menuItem                   = new MenuItem();
        $selectItem                 = $menuItem ->where('id', '=', $_GET['edit'])
                                                ->get();
        
        return view('editStepItemMenu', compact('selectItem'));
    }
    
    
}
