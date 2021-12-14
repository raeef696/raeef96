@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Open New person</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{url('store')}}">
                @csrf
                <div class="form-group">
                    <label for="title" class="col-md-4 control-label">First Name</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="first_name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="last_name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="priority" class="col-md-4 control-label">Email Address</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-ticket"></i> Add person
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
