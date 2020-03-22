@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="center" class="card">

                        <div class="card border-success ">

                            <div class="card-header" >سوالات پرسشنامه  </div>
                            <div align="right" class="card-body">
                                <h3 align="center" class="card-title"> {{$questionnaire->title}}</h3>
                                <a href="{{route('questions.create',$questionnaire->title)}}"
                                   class="btn btn-outline-secondary">سوال جدید</a>
                                <a href="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}"
                                   class="btn btn-outline-secondary">نظرسنجی</a>
                            </div>

                            @foreach($questionnaire->questions()->get() as $question)
                                <div class="card">
                                    <div class="card-header">{{$question->question}}</div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush" >
                                        @foreach($question->answers as $answer)
                                            <li class="list-group-item">{{$answer->answer}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            @endforeach
                                <!--
                                <h4 class="card-title">کاربرد : {{$questionnaire->purpose}}</h4>
                                <hr>
                                <h4 class="card-title">نام طراح : {{$questionnaire->user->name}}</h4>
                                <hr>
                                <h4 class="card-title">تاریخ اایجاد : {{jDate($questionnaire->created_at)}}</h4>
                                <hr>
                                <h4 class="card-title">تاریخ اخرین بروز رسانی : {{jDate($questionnaire->updated_at)}}</h4>
                                <hr>
                                -->
                                <form action="#" class="post">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button  type="submit" onclick="return confirm('آیا برای حذف این مقاله مطمئن هستید؟؟')" class="btn btn-outline-danger btn-dark  btn-lg">حذف </button>
                                </form>
                            <a href="{{url('/home')}}" class="btn btn-secondary">برگشت</a>
                            </div>

            </div>
        </div>
    </div>
@endsection
