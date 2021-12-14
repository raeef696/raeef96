@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-ticket"> My Tickets</i>
          </div>

          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last name</th>
                  <th>Email Address</th>
                  <th>Delete</th>
                  <th>Updete</th>
                </tr>
              </thead>
              @foreach ($raeef as $index=>$raeefs)
              <tbody>
                <tr>
                  <td>{{++$index}}</td>
                  <td>
                      {{$raeefs->first_name}}
                    </a>
                  </td>
                  <td><span>{{$raeefs->last_name}}</span></td>
                  <td>{{$raeefs->email}}</td>
                  <td><a href="{{url('destroy/'.$raeefs->id)}}" class="btn btn-danger">Delete</a></td>
                  <td><a href="{{url('edit/' . $raeefs->id)}}" class="btn btn-warning">Updete</a></td>
                </tr>

              </tbody>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
