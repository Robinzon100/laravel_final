@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

       

                
                
 
 
            
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
                    
               
                
                    @endforeach
                </tbody>
                </table>
            
                
            </div>




            </div>
        </div>
    </div>
</div>

@endsection


 
 