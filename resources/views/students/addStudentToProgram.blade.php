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
              <h4 class="card-title"> Paid Students for Program  </h4>
              
              <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Student</th>
                    <th>Program</th>
                    <th>bank</th>
                    <th>Amount</th>
                    <th>Action</th>

                    
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($programs as $program ) 
                  <tr>
                    <td> {{ $program->id }} </td>
                    <td> {{ $program->student->name }} </td>
                    <td> {{ $program->program->title }}</td>
                    <td> {{ $program->bank }}</td>
                    <td> {{ $program->amount }}</td>                    
                    <td>
                        <a  href="{{ route('activateStudent',['program'=> $program->id]) }}" class="btn btn-primary ">
                            {{$program->active}}
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