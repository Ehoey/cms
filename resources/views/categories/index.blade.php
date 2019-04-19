@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{route('categories.create')}}" class="btn btn-success mb-2">Add categories</a>
    </div>
    <div class="card card-default">
        <div class="card-header">categories</div>
        <div class="card-body"></div>
    </div>

@endsection