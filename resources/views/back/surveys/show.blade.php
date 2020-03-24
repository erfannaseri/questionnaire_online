@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>{{$questionnaire->title}}</h1>


                <form action="{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                    @csrf
                    @foreach ($questionnaire->questions as $key=>$question)

                        <div class="card">

                            <div dir="rtl" align="right" class="card-header"> {{ $key +1 }} - {{$question->question }}</div>
                            <br>
                            @error('response.'.$key.'.answer_id')
                            <h5 align="right" style="font-size: 10px" dir="rtl" class="alert alert-danger">{{ $message }}</h5>
                            @enderror
                        </div>
                        <div align=" right" class="card-body">
                            <ul  class="list-group " >
                                @foreach($question->answers as $answer)
                                    <label for="answer{{$answer->id}}">
                                        <li class="list-group-item">
                                            {{$answer->answer}}
                                            <input type="radio" name="response[{{$key}}][answer_id]" {{old('response.'.$key.'.answer_id') == $answer->id ? 'checked' : '' }}
                                            id="answer{{$answer->id}}" class="ml-3" value="{{$answer->id}}">
                                            <input type="hidden" name="response[{{$key}}][question_id]" value="{{$question->id}}">
                                        </li>
                                    </label>
                                @endforeach
                            </ul>
                        </div>

                    @endforeach
                    <div class="card">
                        <div class="card-header" align="center">اطلاعات شخصی</div>
                        <div class="card-body">
                    <div align="right" class="form-group">
                        <label  for="survey[name]"> : نام </label>
                        <input type="text" id="survey[name]" name="survey[name]" value="{{old('survey.name')}}" class="form-control @error('survey.name') is-invalid @enderror">
                        <br>
                        @error('survey.name')
                        <h6 align="right" style="font-size: 10px" class="alert alert-danger">{{$message}}</h6>
                        @enderror
                    </div>
                    <div align="right" class="form-group">
                        <label  for="survey[email]"> : ایمیل</label>
                        <input type="email" id="survey[email]" name="survey[email]" value="{{old('survey.email')}}" class="form-control @error('survey.email') is-invalid @enderror">
                        <br>
                        @error('survey.email')
                        <h6 align="right" style="font-size: 10px" class="alert alert-danger">{{$message}}</h6>
                        @enderror
                    </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary btn-primary btn-lg"> تایید</button>
                </form>

@endsection
