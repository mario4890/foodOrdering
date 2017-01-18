@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <center>
                        @foreach ($selectItem as $value)
                        <form action="/homeOwner/edit" method="GET">
                            <input type="hidden" value="{{ $value->id }}" name="id" />
                            <input type="text" value="{{ $value->name }}" name="name" /><br /><br />
                            <input type="file" value="{{ $value->image }}" name="image" /><br /><br/>
                            <input type="text" value="{{ $value->price }}"name="price" />
                            <br><br/><br/>
                            <input type="submit" value="send" name="update" />
                        </form>
                        @endforeach
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
