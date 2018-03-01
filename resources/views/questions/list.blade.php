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
              <h4 class="card-title">Questions</h4>
              <a href="{{ route('addQeustionForm') }}" > Add Questions</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                    <th>Answer 5</th>
                    <th>correct_answer</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($questions as $question )
                  <tr>
                    <td>{{$question->question}}</td>
                    <td>{{$question->answer_1}}</td>
                    <td>{{$question->answer_2}}</td>
                    <td>{{$question->answer_3}}</td>
                    <td>{{$question->answer_4}}</td>
                    <td>{{$question->answer_5}}</td>
                    <td>{{$question->correct_answer}}</td>
                    
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