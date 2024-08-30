<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Model\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    public function index(){
        $menu = MenuResource::collection( Menu::all() );
        $data = [
            "msg"=>"Return All Data",
            "status"=>"200",
            "data"=>$menu
        ];
        return response()->json($data);
    }
    public function show($id){
        $menu = Menu::find($id);
        if($menu){
        $data = [
            "msg"=>"Return one Data",
            "status"=>"200",
            "data"=> new MenuResource( $menu )
        ];
        return response()->json($data);
    }else{
        $data = [
            "msg"=>"No Data",
            "status"=>"404",
            "data"=>null
        ];
        return response()->json($data);
    }
}
    public function delete(Request $request){
        $id= $request->id;
        $menu = Menu::find($id);
        if(File::exists(public_path('img/menu/'.$menu->image))){
            File::delete(public_path('img/menu/'.$menu->image));
            }
        $menu->delete();
        $data = [
            "msg"=>"Deleted Successfully",
            "status"=>"200",
            "data"=>null
        ];
        return response()->json($data);
    }
    public function store(Request $request){
        $validateData = Validator::make($request->all(),[
            'id' => 'unique:menus|max:255',
            'image' => 'required|image|mimes:jpeg,png',
            'title_en' => 'required|min:3|max:50',
            'title_ar' => 'required|min:3|max:50',
            'description_en' => 'required|min:5|max:150',
            'description_ar' => 'required|min:5|max:150',
            'price' => 'required',
            'parent_id' => 'required',
        ]);
        if($validateData->fails()){
            $data = [
                "msg"=>"Validation Required",
                "status"=>404,
                "data"=>$validateData->errors()
            ];
            return response()->json($data);
        }
        if($request->hasFile("image")){
            $image = $request->image;
            $imageName =time()."_".rand(1,500).".". $image->extension();
            $image->move(public_path("img/menu/"),$imageName);
        };
        $NewData = Menu::create([
            "id"=>$request->id,
            "image"=>$imageName,
            "title_en"=> $request->title_en,
            "title_ar"=> $request->title_ar,
            "description_en"=> $request->description_en,
            "description_ar"=> $request->description_ar,
            "price"=> $request->price,
            "parent_id"=> $request->parent_id,
        ]);
        $data = [
            "msg"=>"Created Successfully",
            "status"=>200,
            "data"=>new MenuResource( $NewData )
        ];
        return response()->json($data);
    }
    public function update(Request $request){

        $old_id = $request->old_id;
        $menu =Menu::findOrFail($old_id);
        $validateData = Validator::make($request->all(),[
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
        if($validateData->fails()){
            $data = [
                "msg"=>"Validation Required",
                "status"=>404,
                "data"=>$validateData->errors()
            ];
            return response()->json($data);
        }


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
        $data = [
            "msg"=>"Updated Successfully",
            "status"=>200,
            "data"=>new MenuResource( $menu )
        ];
        return response()->json($data);

    }
}
