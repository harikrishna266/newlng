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
              <h4 class="card-title">Programs</h4>
              <a href="{{ route('ShowProgramFrom') }}" >Add Programs</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Description</th>
                    <th>Test enabled</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($programs as  $program)

                  <tr>
                    <td>{{ $program->id }}</td>
                    <td>{{ $program->title }}</td>
                    <td>{{ $program->date }}</td>
                    <td>{{ $program->venue }}</td>
                    <td>{{ $program->description }}</td>
                    <td>
                       @if ($program->test_activated)  
                        Active
                      @else 
                        Inactive
                      @endif
                  </td>
                    <td>
                      <a href="programs/edit/{{ $program->id }}" class="btn btn-primary ">
                            <i class="mdi mdi-pen"></i>
                      </a>
                      <a   onclick="return confirm('Are you sure?')" href="programs/delete/{{ $program->id }}" class="btn btn-primary ">
                            <i class="mdi mdi-delete"></i>
                      </a>
                    
                       <a  href="{{ route('addStudentToProgram',['id'=> $program->id]) }}" class="btn btn-primary ">
                            <i class="mdi mdi-library"></i>
                      </a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
@endsection