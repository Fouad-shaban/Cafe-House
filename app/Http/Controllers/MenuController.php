<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    public function index(){
        return view('menu');
    }
    public function show($id){
        $menu = Menu::findOrFail($id);
        return view("menu.show",["result"=>$menu]);
    }
    public function delete($id){
        $menu = Menu::findOrFail($id);
        $menu->delete();
        if(File::exists(public_path('img/menu/'.$menu->image))){
            File::delete(public_path('img/menu/'.$menu->image));
            }
        return redirect()->route('home')->with("message","Deleted Successfully");
    }
    public function create(){
        $menu = Menu::all();
        return view("menu.create",["result"=>$menu]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'id' => 'unique:menus|max:255',
            'image' => 'required|image|mimes:jpeg,png',
            'title_en' => 'required|min:3|max:50',
            'title_ar' => 'required|min:3|max:50',
            'description_en' => 'required|min:5|max:150',
            'description_ar' => 'required|min:5|max:150',
            'price' => 'required',
            'parent_id' => 'required',
        ]);
        if($request->hasFile("image")){
            $image = $request->image;
            $imageName =time()."_".rand(1,500).".". $image->extension();
            $image->move(public_path("img/menu/"),$imageName);
        };
        Menu::create([
            "id"=>$request->id,
            "image"=>$imageName,
            "title_en"=> $request->title_en,
            "title_ar"=> $request->title_ar,
            "description_en"=> $request->description_en,
            "description_ar"=> $request->description_ar,
            "price"=> $request->price,
            "parent_id"=> $request->parent_id,
        ]);
        return redirect()->route("home")->with("message","Created Successfully");
    }
    public function edit($id){
        $menu = Menu::findOrFail($id);
        return view("menu.edit",["item"=>$menu]);
    }
    public function update(Request $request){

        $old_id = $request->old_id;
        $menu =Menu::findOrFail($old_id);
        $request->validate([
            'id' => [
                'required',
                Rule::unique('menus')->ignore($old_id),
            ],
            'image' => 'image|mimes:jpeg,png',
            'title_en' => 'required|min:3|max:50',
            'title_ar' => 'required|min:3|max:50',
            'description_en' => 'required|min:5|max:150',
            'description_ar' => 'required|min:5|max:150',
            'price' => 'required',
            'parent_id' => 'required',
        ]);
        if($request->hasFile("image")){
            if(File::exists(public_path('img/menu/'.$menu->image))){
                File::delete(public_path('img/menu/'.$menu->image));
                }
            $image = $request->image;
            $imageName =time()."_".rand(1,500).".". $image->extension();
            $image->move(public_path("img/menu/"),$imageName);
        }else{
            $imageName = $menu->image;
        };

        $menu->update([
            "id"=>$request->id,
            "image"=>$imageName,
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
            "price"=>$request->price,
            "parent_id"=>$request->parent_id,
        ]);

        return redirect()->route("home")->with("message","Updated Successfully");
    }
}
