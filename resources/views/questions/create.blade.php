@extends('layouts.admin')

@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Questions</h4>
              <form class="form-horizontal" method="POST" action="{{ route('addquestions') }}">
                    {{ csrf_field() }}

                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Test </label>

                        <div class="col-md-6">
                            
                            <select class="form-control" name="test_id"  value="{{ old('test_id') }}" required  >
                                @foreach ($tests as $test)
                                <option value="{{$test->id}}"> {{$test->title}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('test_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('test_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Questions</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="question" value="{{ old('question') }}" required> </textarea>
                            @if ($errors->has('question'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('question') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('answer_1') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Answer 1</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="answer_1" value="{{ old('answer_1') }}" required> </textarea>
                            @if ($errors->has('answer_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer_1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('answer_2') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Answer 2</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="answer_2" value="{{ old('answer_2') }}" required> </textarea>
                            @if ($errors->has('answer_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer_2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('answer_3') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Answer 3</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="answer_3" value="{{ old('answer_3') }}" required> </textarea>
                            @if ($errors->has('answer_3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer_3') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('answer_4') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Answer 4</label>

                        <div class="col-md-6">
                            
                            <textarea required class="form-control" name="answer_4" value="{{ old('answer_4') }}" required> </textarea>
                            @if ($errors->has('answer_4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer_4') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('answer_5') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Answer 5</label>

                        <div class="col-md-6">
                            
                            <textarea  class="form-control" name="answer_5" value="{{ old('answer_5') }}" required> </textarea>
                            @if ($errors->has('answer_5'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer_5') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('correct_answer') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Correct answer</label>

                        <div class="col-md-6">
                        
                            <input  type="checkbox" class="form-check-input" value="1" name="correct_answer">
                            <label class="form-check-label" for="exampleCheck1">Answer 1</label>
                        </div> 
                        <div class="col-md-6">
                            <input  type="checkbox" class="form-check-input" value="2" name="correct_answer">
                            <label class="form-check-label" for="exampleCheck1">Answer 2</label>
                         </div>
                         <div class="col-md-6">
                            <input  type="checkbox" class="form-check-input" value="3" name="correct_answer">
                            <label class="form-check-label" for="exampleCheck1">Answer 3</label>
                         </div>
                         <div class="col-md-6">
                            <input  type="checkbox" class="form-check-input" value="4" name="correct_answer">
                            <label class="form-check-label" for="exampleCheck1">Answer 4</label>
                         </div>
                         <div class="col-md-6">
                            <input  type="checkbox" class="form-check-input" value="5" name="correct_answer">
                            <label class="form-check-label" for="exampleCheck1">Answer 5</label>
                         </div>

                            @if ($errors->has('correct_answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('correct_answer') }}</strong>
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
