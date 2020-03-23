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
                            @error('response.'.$key.'.answer_id')
                            <small dir="rtl" class="text-danger">{{ $message }}</small>
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

                    <button type="submit" class="btn btn-outline-secondary btn-primary btn-lg"> تایید</button>
                </form>

@endsection
