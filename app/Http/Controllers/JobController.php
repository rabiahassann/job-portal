<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class JobController extends Controller
{

   Public function index(){
      $categorys = Category::withCount('jobs')->get();
      $jobs = Job::join('categories', 'jobs.category_id', '=', 'categories.id')
    ->select('jobs.*', 'categories.name as category_name')
    ->orderBy('jobs.id', 'desc') // Assuming 'created_at' is the timestamp column
    ->take(2)
    ->get();

      return view('welcome', compact('categorys','jobs'));
   }   

 Public function showjobs(){
    $categorys = Category::all();
     $jobs = Job::simplePaginate(10);
    return view('admin.jobs', compact('categorys','jobs'));
 }   

 public function addjob(request $request){
    $categorys = Category::all();
    return view('admin.addjob', compact('categorys'));
}

public function insertjob(request $request){
   $request->validate([
      'name' => 'required',
      'ldate' => 'required' ,
      'category' => 'required',
      'detail' => 'required',
      'location' => 'required',
  ]);
  // Create a new category
  $job = Job::create([
      'posteddate' => today(),
      'enddate' =>  $request->input('ldate'),
      'noOfApplicants' => 0,
      'category_id' => $request->input('category'),
      'title' => $request->input('name'),
      'description' => $request->input('detail'),
      'location' => $request->input('location'),
  ]);
  
  Alert::success('Job Added successfully')->autoClose(3000);
return redirect()->route('showjobs');
}

public function editjob($id){
   $job = Job::where('id',$id)->first();
   $categorys = Category::all();
   return view('admin.updatejob',compact('job','categorys'));
}

public function updatejob($id, request $request){
   $jobModel = Job::find($id);
   $jobModel->category_id = $request->input('category');
   $jobModel->title = $request->input('name');
   $jobModel->description = $request->input('detail');
   $jobModel->enddate = $request->input('ldate');
   $jobModel->location = $request->input('location');
   $jobModel->save();
   Alert::success('Updated successfully')->autoClose(3000);
return redirect()->route('showjobs');
}

public function dltjob($id){
   $job = Job::find($id);
   // Check if the category exists
   if (!$job) {
       return redirect()->back()->with('error', 'Job not found');
   }
   $job->delete();
   Alert::success('Deleted successfully')->autoClose(3000);
   return redirect()->back();
}

public function morejobs(){
   $categorys = Category::withCount('jobs')->get();
   $jobs = Job::join('categories', 'jobs.category_id', '=', 'categories.id')
    ->select('jobs.*', 'categories.name as category_name')
    ->orderBy('jobs.id', 'desc')
    ->simplePaginate(10);
   return view('morejobs', compact('categorys','jobs'));
}

public function apply($id)
{
   $job = Job::where('id',$id)->first();
   return view('apply', compact('job'));
}
}
