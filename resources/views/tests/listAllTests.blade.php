@extends('layouts.admin')

@section('content')
<div class="row purchace-popup">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
               @if (\Session::has('message'))
                  <div class="alert alert-danger">
                      <ul>
                          <li>{!! \Session::get('message') !!}</li>
                      </ul>
                  </div>
              @endif
              <h4 class="card-title">Tests</h4>
              <a href="{{ route('addtest') }}" >New Tests</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Program</th>
                    <th>Duration</th>
                    <th>Active</th>
                    
                  </tr>
                </thead>
                <tbody>
                 @foreach($tests as $test )
                  <tr>
                    <td>{{$test->id}}</td>
                    <td>{{$test->title}}</td>
                    <td>{{$test->programs->title}}</td>
                    <td>{{$test->duration}}</td>
                    <td>{{$test->active}}</td>
                    <!--  -->
                    <td><label class="badge badge-danger">Pending</label></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
@endsection