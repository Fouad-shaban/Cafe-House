<?php

namespace App\Http\Controllers;
use App\Model\Todayspecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class TodayspecialController extends Controller
{
    public function index(){
        return view('menu');
    }
    public function show($id){
        $todayspecial = Todayspecial::findOrFail($id);
        return view("todayspecial.show",["result"=>$todayspecial]);
    }
    public function delete($id){
        $todayspecial = Todayspecial::findOrFail($id);
        $todayspecial->delete();
        if(File::exists(public_path('img/todayspecial/'.$todayspecial->image))){
            File::delete(public_path('img/todayspecial/'.$todayspecial->image));
            }
        return redirect()->route('home')->with("message","Deleted Successfully");
    }
    public function create(){
        $todayspecial = Todayspecial::all();
        return view("todayspecial.create",["result"=>$todayspecial]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'id' => 'unique:todayspecials|max:255',
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
            $image->move(public_path("img/todayspecial/"),$imageName);
        };
        Todayspecial::create([
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
        $todayspecial = Todayspecial::findOrFail($id);
        return view("todayspecial.edit",["item"=>$todayspecial]);
    }
    public function update(Request $request){

        $old_id = $request->old_id;
        $todayspecial =Todayspecial::findOrFail($old_id);
        $request->validate([
            'id' => [
                'required',
                Rule::unique('todayspecials')->ignore($old_id),
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
            if(File::exists(public_path('img/todayspecial/'.$todayspecial->image))){
                File::delete(public_path('img/todayspecial/'.$todayspecial->image));
                }
            $image = $request->image;
            $imageName =time()."_".rand(1,500).".". $image->extension();
            $image->move(public_path("img/todayspecial/"),$imageName);
        }else{
            $imageName = $todayspecial->image;
        };

        $todayspecial->update([
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
