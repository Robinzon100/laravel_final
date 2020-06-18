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
                <h1>insert </h1>
            
                <form action="/vacancy/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    name
                    <input type="text" name="name">
                    description
                    <input type="text" name="description">
                    
                     
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


            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
 
                    </tr>
                </thead>
                <tbody>
                        @foreach($Vacancy as $singleVacancy)
                    <tr>
                    
                    <td>{{$singleVacancy->id}}</td>
                    <td>{{$singleVacancy->name}}</td>
                    <td>{{$singleVacancy->description}}</td>
                 
                    
               
                
                    
                    <td>
                        <a href="/vacancys/update/{{$singleVacancy->id}}">Update</a>
                    </td>
                    <td>
                        <form action="/vacancy/delete/{{$singleVacancy->id}}" method="post">
                            @csrf
                            <input type="hidden" value={{$singleVacancy->id}} name="id">
                            <button >Delete</button>
                        </form>
        
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            
                
            </div>




            </div>
        </div>
    </div>
</div>

@endsection


 
 