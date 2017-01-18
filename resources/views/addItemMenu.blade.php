@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <center>
                        <form action="" method="GET">
                            <input type="text" placeholder="Name" name="name" /><br /><br />
                            <input type="file" name="image" /><br /><br/>
                            <input type="text" placeholder="price" name="price" />
                            <br><br/><br/>
                            <input type="submit" value="send" name="send" />
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
