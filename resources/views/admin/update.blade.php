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
                <h1>update job</h1>
            
                <form action="/admin/jobs/updateJobs" method="post" enctype="multipart/form-data">
                    @csrf
                    
                        <input value="{{ $post->id }}" type="hidden" name="id" placeholder="title">
                    <label for="title">title</label>
                        <input value="{{ $post->title }}" type="text" name="title" placeholder="title">
                    <br>
                    <br>
                    <label for="descirption">descirption</label>
                        <input value="{{ $post->descirption }}" type="text" name="descirption" placeholder="descirption">
                    <br>
                    <br>
                    <label for="company">company</label>
                        <input value="{{ $post->company }}" type="text" name="company" placeholder="company">
                    <br>
                    <br>
                    <label for="price">price</label>
                        <input value="{{ $post->price }}" type="number" name="price" placeholder="price">
                    <br>
                    <br>
                    <label for="fullTime">fullTime</label>
                    @if ($post->fullTime == 1)
                        <input checked type="checkbox" name="fullTime">
                    @else
                        <input  type="checkbox" name="fullTime">
                    @endif
                    <br>
                    <br>
                     
                    <button type="submit" value="submit" name="submit">update</button>
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
 
            </div>
        </div>
    </div>
</div>

@endsection


 
 