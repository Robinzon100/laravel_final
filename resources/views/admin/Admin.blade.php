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
                <h1>insert a new job</h1>
            
                <form action="/admin/jobs/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="title">title</label>
                        <input type="text" name="title" placeholder="title">
                    <br>
                    <br>
                    <label for="descirption">descirption</label>
                        <input type="text" name="descirption" placeholder="descirption">
                    <br>
                    <br>
                    <label for="company">company</label>
                        <input type="text" name="company" placeholder="company">
                    <br>
                    <br>
                    <label for="price">price</label>
                        <input type="number" name="price" placeholder="price">
                    <br>
                    <br>
                    <label for="fullTime">fullTime</label>
                        <input type="checkbox" name="fullTime">
                    <br>
                    <br>
                     
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


            <h1>CRUD JOB</h1>
            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">descirption</th>
                        <th scope="col">company</th>
                        <th scope="col">price</th>
                        <th scope="col">fullTime</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($jobs as $job)
                    <tr>
                    
                    <td>{{$job->id}}</td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->descirption}}</td>
                    <td>{{$job->company}}</td>
                    <td>{{$job->price}}</td>
                    <td>{{$job->fullTime}}</td>
                    
               
                
                    
                    <td>
                        <a href="/admin/jobs/update/{{$job->id}}">Update</a>
                    </td>
                    <td>
                        <form action="/admin/jobs/delete" method="post">
                            @csrf
                            <input type="hidden" value={{$job->id}} name="id">
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


 
 