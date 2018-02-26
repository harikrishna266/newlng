@extends('layouts.admin')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create Test</h4>
              <form class="form-horizontal" method="POST" action="{{ route('savetest') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Test Title</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Program </label>

                        <div class="col-md-6">
                            
                            <select class="form-control" name="program_id"  value="{{ old('id') }}" required  >
                                @foreach ($programs as $program)
                                <option value="{{$program->id}}"> {{$program->title}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('program_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('program_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Duration</label>

                        <div class="col-md-6">
                            <input type="number" class="form-control" name="duration" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('duration'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Activate Test</label>

                        <div class="col-md-6">
                            <input   type="checkbox"  class="form-control" name="active" value="{{ old('active') }}" >

                            @if ($errors->has('active'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('active') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
