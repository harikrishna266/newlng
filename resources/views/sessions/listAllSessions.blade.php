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
              <h4 class="card-title">Sessions</h4>
              <a href="{{ route('showSessionForm') }}" > Session</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>session</th>
                    <th>Program</th>
                    <th>date</th>
                    <th>venue</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($sessions as $session )
                  <tr>
                    <td>{{$session->title}}</td>
                    <td>{{$session->programs->title}}</td>
                    <td>{{$session->date}}</td>
                    <td>{{$session->venue}}</td>
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