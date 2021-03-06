@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in admin!
                   
                </div>

                
                

            <div class="flex-center position-ref full-height" >
                <h1>insert a new company</h1>
            
                <form action="/admin/company/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    
                     
                    <button type="submit" value="submit" name="submit">Insert</button>
                </form>
            </div>


        
    
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <h1>CRUD company</h1>
            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">code_id</th>
                        <th scope="col">created at</th>
                        <th scope="col">code_id</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($Company as $singleCompany)
                    <tr>
                    
                    <td>{{$singleCompany->id}}</td>
                    <td>{{$singleCompany->name}}</td>
                    <td>{{$singleCompany->code_id}}</td>
                    <td>{{$singleCompany->createdAt}}</td>
                    <td>{{$singleCompany->password}}</td>
                 
                    
               
                
                    
                    <!-- <td>
                        <a href="/admin/singleCompanys/update/{{$singleCompany->id}}">Update</a>
                    </td>
                    <td>
                        <form action="/admin/singleCompanys/delete" method="post">
                            @csrf
                            <input type="hidden" value={{$singleCompany->id}} name="id">
                            <button >Delete</button>
                        </form>
        
                        
                        </td>
                    </tr> -->
                    @endforeach
                </tbody>
                </table>
            
                
            </div>




            </div>
        </div>
    </div>
</div>

@endsection


 
 