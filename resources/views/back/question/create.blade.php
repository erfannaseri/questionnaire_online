@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">{{$questionnaire->title}} سوالت مربوط به</div>

                    <div class="card-body">
                        <form action="{{route('questions.store',$questionnaire->title)}}" method="post">
                            @csrf
                            <div align="right" class="form-group">
                                <label  for="title"> : سوال</label>
                                <input type="text" id="title" name="question[question]" value="{{old('question.question')}}" class="form-control @error('question.question') is-invalid @enderror">
                                <br>
                                @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div align="right" class="form-group">
                                <fieldset>
                                    <legend>انتخاب ها</legend>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">گزینه 1</label>
                                            <input type="text" name="answers[][answer]" id="answer1" class="form-control" value="{{old('answers.0.answer')}}" >
                                            @error('answers.0.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">گزینه 2</label>
                                            <input type="text" name="answers[][answer]" id="answer1" class="form-control" value="{{old('answers.1.answer')}}" >
                                            @error('answers.1.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">گزینه 3</label>
                                            <input type="text" name="answers[][answer]" id="answer1" class="form-control"  value="{{old('answers.2.answer')}}">
                                            @error('answers.2.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">گزینه 4</label>
                                            <input type="text" name="answers[][answer]" id="answer1" class="form-control" value="{{old('answers.3.answer')}}">
                                            @error('answers.3.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <legend>گزینه درست</legend>
                                        <div class="form-check">
                                            <label class="form-check-label">1</label>
                                            <input type="radio" class="form-check-input" name="correctAnswer[correct_answer]" id="optionsRadios1" value="1" checked="">

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">2</label>
                                            <input type="radio" class="form-check-input" name="correctAnswer[correct_answer]" id="optionsRadios1" value="2" checked="">

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">3</label>
                                            <input type="radio" class="form-check-input" name="correctAnswer[correct_answer]"  id="optionsRadios1" value="3" checked="">

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">4</label>
                                            <input type="radio" class="form-check-input" name="correctAnswer[correct_answer]" id="optionsRadios1" value="4" checked="">
                                        </div>

                                    </fieldset>
                                </fieldset>
                            </div>
                            <input class="btn btn-block btn-lg btn-secondary btn-outline-success" type="submit" value="اضافه کردن سوال ">
                        </form>
                        <hr>
                        <a href="{{route('questionnaire.index',Auth::user()->name)}}" class="btn btn-warning btn-outline-dark">بازگشت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
