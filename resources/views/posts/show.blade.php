@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                <table class="table">
                        <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Created At </th>
                                    <th>  </th> 
                                </tr>
                        </thead>

                        <tbody>
                        <tr>
                                    <td> {{ $post->title }} </td>
                                    <td> {{ $post->description }} </td>
                                    <td> {{ $post->created_at }} </td>
                                    <td> <a  href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a> </td>
                        </tr>
                        </tbody>                  
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection