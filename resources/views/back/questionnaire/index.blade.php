@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">لیست کامل پرسشنامه ها</div>

                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>


                                <th>عنوان</th>
                                <th>کاربرد</th>
                                <th>طراح</th>
                                <th>جزییات</th>
                                <th>----</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                @forelse($questionnaires as $questionnaire)
                                <td>{{$questionnaire->title}}</td>
                                <td>{{$questionnaire->purpose}}</td>
                               <td>{{$questionnaire->user->name}}</td>
                                <td><a href="{{route('questionnaire.show',$questionnaire->title)}}" class="btn btn-success btn-outline-primary">جزییات</a></td>
                                <td><a class="btn btn-info btn-outline-primary" href="{{route('questions.create',$questionnaire->title)}}">طراحی سوالات</a></td>
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info">هیچ پرسشنامه ای ثبت نشده است</p>
                                <a class="btn btn-outline-primary btn-secondary btn-lg btn-block" href="{{url('/home')}}">برگشت</a>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
