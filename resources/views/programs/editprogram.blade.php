@extends('layouts.admin')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Program</h4>

              <form class="form-horizontal" method="POST" action="{{ route('UpdateProgram', ['id' => $program->id]) }}">
                     {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Program Title</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="title" value="{{$program->title}}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Program description</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="description" required>{{$program->description}}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Program Venue</label>

                        <div class="col-md-6">
                            <input id="email"  type="text"  class="form-control" name="venue" value="{{$program->venue}}" required>

                            @if ($errors->has('venue'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('venue') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Program Date</label>
                             <div class="col-md-6">
                                <input   type="date"  class="form-control" name="date" value="{{$program->date}}" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    <div class="form-group{{ $errors->has('test_activated') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Activate Test</label>

                        <div class="col-md-6">
                            <input   type="checkbox"  class="form-control" name="test_activated" checked="{{$program->test_activated}}" value="1"   >

                            @if ($errors->has('test_activated'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('test_activated') }}</strong>
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
