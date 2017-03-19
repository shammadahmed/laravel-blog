@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h2>Dashboard</h2>
        <hr>
        <p>Hi {{ auth()->user()->name }}! Welcome to the dashboard</p>
        <p><a href="/posts/create">Create a new Post</a></p>
    </div>
@endsection
