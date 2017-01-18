@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <center>
                        @foreach ($selectAllItem as $value)
                        <form action="/homeOwner/editStep" method="GET">
                            {{ $value->name }} || {{ $value->price }} || <button type="submit" name="edit" value="{{ $value->id }}"> EDIT</button><br/><br/>
                        </form>
                        @endforeach
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
