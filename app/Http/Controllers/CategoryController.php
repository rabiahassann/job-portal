<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    public function showcategory()
    {
        $categorys = Category::simplePaginate(10);
        return view('admin.category', compact('categorys'));
    }

    public function addcategory(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images'), $imageName);
    
            $imagePath = 'assets/images/' . $imageName;
        } else {
            $imagePath = null;
        }
    
        // Create a new category
        $category = Category::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'image' => $imagePath, 
        ]);
    
        Alert::success('Added successfully')->autoClose(3000);
        return redirect()->back();
    }

    public function editcategory($id){
        $category = Category::where('id',$id)->first();
        return view('admin.updatecategory', compact('category'));
       
    }
    
    public function updatecategory($id, request $request){
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->detail = $request->input('detail');
        $category->save();
        Alert::success('Updated successfully')->autoClose(3000);
     return redirect()->route('showcategory');
     }
    public function dltcategory($id){
          $category = Category::find($id);
          // Check if the category exists
          if (!$category) {
              return redirect()->back()->with('error', 'Category not found');
          }
          $category->delete();
          Alert::success('Deleted successfully')->autoClose(3000);
          return redirect()->back();
    }
   
}
