@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    {{session()->flush()}}


                    <br>
                    {{session()->get('peter')}}



                    {{--{{session()->forget('tenma')}}--}}
                    <br>
                    {{session()->get('tenma')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
