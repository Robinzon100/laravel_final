<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\jobs;




class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('Isadmin');
    }
    
    public function getAdmin(Request $request)
    {
        $jobs = jobs::get();
        // print_r($jobs);
        return view('admin.Admin', compact('jobs'));
    }

    public function insertJobs(Request $req)
    {
        $this->validate($req, [
            "title" => "required|string",
            "descirption" => "required|string",
            "company" => "required|string",
            "price" => "numeric",
        ]);




        $title = $req->input('title');
        $descirption = $req->input('descirption');
        $company = $req->input('company');
        $price = $req->input('price');

        if ($req->input('fullTime') == "on") {
            $fullTime = true;
        }else{
            $fullTime = false;
        }


        DB::table('jobs')->insert(
            [
                'title' => $title,
                'descirption' => $descirption,
                'company' => $company,
                'price' => $price,
                'fullTime' => $fullTime
            ]
        );
        return back()
            ->with('success', 'You have successfully upload file.');

        // return redirect('admin/books/view');
    }

    

    public function deleteJobs(Request $req)
    {

        $this->validate($req, [
            "id" => "required|numeric",
        ]);
        $id = $req->input('id');
        
        jobs::where('id', $id)->delete();

        return back();
    }



    public function getUpdateJobs($id)
    {


        $toret = DB::table('jobs')
            ->where('id', $id)
            ->first();


        if (
            !DB::table('jobs')
                ->where('id', $id)
                ->count() > 0
        ) {
            exit();
        }

        
        
        return view('admin/update', ["post" => $toret]);
    }
  

    protected function updateJob(Request $req)
    {

        $this->validate($req, [
            "title" => "required|string",
            "descirption" => "required|string",
            "company" => "required|string",
            "price" => "numeric",
        ]);


        $id = $req->input('id');
        $title = $req->input('title');
        $descirption = $req->input('descirption');
        $company = $req->input('company');
        $price = $req->input('price');

        if ($req->input('fullTime') == "on") {
            $fullTime = true;
        }else{
            $fullTime = false;
        }



        $updated = DB::table('jobs')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'descirption' => $descirption,
                'company' => $company,
                'price' => $price,
                'fullTime' => $fullTime
            ]);


            return redirect('admin/Admin');

    }
  


    // getUpdateJobs
}
