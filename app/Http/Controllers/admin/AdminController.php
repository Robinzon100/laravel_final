<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Vacancy;
use App\Company;




class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('Isadmin');
    }
    
    public function getAdmin(Request $request)
    {
        $Company = Company::get();
        // print_r($Company);
        return view('admin.Admin', compact('Company'));
    }

    public function insertCompany(Request $req)
    {

        $createdAt = date("Y-m-d H:i:s",mt_rand(1262055681,1262055681));
        
        $name = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(5/strlen($x)) )),5,10);
        $code_id = substr(str_shuffle('0123456789'),0 , 9);
        $password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(5/strlen($x)) )),5,10);

     


        DB::table('companies')->insert(
            [
                'name' => $name,
                'code_id' => $code_id,
                'createdAt' => $createdAt,
                'password' => $password,
            ]
        );
        return back()
            ->with('success', 'You have successfully upload ');

        // return redirect('admin/books/view');
    }





    public function getVacancy(Request $request)
    {
        $Vacancy = Vacancy::get();
        // print_r($Vacancy);
        return view('Vacancy', compact('Vacancy'));
    }

    public function insertVacancy(Request $req)
    {

        
        $name = $req->input('name');
        $description = $req->input('description');
        $company_id = 1;

     


        DB::table('vacancies')->insert(
            [
                'name' => $name,
                'description' => $description,
                'Company_id' => $company_id
            ]
        );
        return back()
            ->with('success', 'You have successfully upload ');

        // return redirect('admin/books/view');
    }


    

    

    public function deleteVacancy(Request $req)
    {

        $this->validate($req, [
            "id" => "required|numeric",
        ]);
        $id = $req->input('id');
        
        Vacancy::where('id', $id)->delete();

        return back();
    }



    // public function getUpdateVacancy($id)
    // {


    //     $toret = DB::table('vacancies')
    //         ->where('id', $id)
    //         ->first();


    //     if (
    //         !DB::table('vacancies')
    //             ->where('id', $id)
    //             ->count() > 0
    //     ) {
    //         exit();
    //     }

        
        
    //     return view('admin/update', ["post" => $toret]);
    // }
  

    // protected function updateVacancieRequest $req)
    // {

    //     $this->validate($req, [
    //         "title" => "required|string",
    //         "descirption" => "required|string",
    //         "company" => "required|string",
    //         "price" => "numeric",
    //     ]);


    //     $id = $req->input('id');
    //     $title = $req->input('title');
    //     $descirption = $req->input('descirption');
    //     $company = $req->input('company');
    //     $price = $req->input('price');

    //     if ($req->input('fullTime') == "on") {
    //         $fullTime = true;
    //     }else{
    //         $fullTime = false;
    //     }



    //     $updated = DB::table('vacancie')
    //         ->where('id', $id)
    //         ->update([
    //             'title' => $title,
    //             'descirption' => $descirption,
    //             'company' => $company,
    //             'price' => $price,
    //             'fullTime' => $fullTime
    //         ]);


    //         return redirect('admin/Admin');

    // }
  


    // getUpdateVacancie
}
