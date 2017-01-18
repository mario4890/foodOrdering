@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/homeOwner/add">Add menu</a><br/>
                    <a href="/homeOwner/edit">Edit menu</a><br/>
                    <a href="/homeOwner/delete">Delete menu items</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
