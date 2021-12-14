@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Open New person</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{url('update/' .$raeef->id)}}">
                @csrf
                <div class="form-group">
                    <label for="title" class="col-md-4 control-label">First Name</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="first_name" value="{{$raeef->first_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="last_name" value="{{$raeef->last_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="priority" class="col-md-4 control-label">Email Address</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="email" value="{{$raeef->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-ticket"></i> Updete person
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
