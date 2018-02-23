@extends('layouts.admin')

@section('content')
<div class="row purchace-popup">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Students</h4>
              
              <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>email id</th>
                    <th>phone no</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as  $student)
                  <tr>
                    <td> {{ $student->id }} </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>456789</td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
@endsection