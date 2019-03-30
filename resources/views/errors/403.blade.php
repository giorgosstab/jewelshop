@extends('voyager::master')

@section('title', 'Forbidden')

@section('content')
    <!--container-->
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-warning"></i> 403
        </h1>
        <div class="alert alert-danger">
            <strong>403</strong>
            <p>Forbidden! You don't have access here.</p>
        </div>
    </div>
@endsection

