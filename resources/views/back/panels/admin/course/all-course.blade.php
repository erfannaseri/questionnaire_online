@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-right: -200px;margin-left: -200px">
                <div class="btn-group-vertical">
                    <a href="{{ route('student.all') }}" class="btn btn-info">دانش آموز</a>
                    <a href="#" class="btn btn-secondary">معلمان</a>
                    <a href="#" class="btn btn-danger">کل دروس</a>
                    <a href="{{ route('questionnaire.all') }}" class="btn btn-primary">سوالات</a>
                    <a href="#" class="btn btn-success">پاسخ نامه سوالات</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3>{{ Auth::user()->name }}</h3></div>

                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            @forelse($courses as $course)
                                <tr>
                                    <th>عنوان</th>
                                    <th>کاربرد</th>

                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->id}}</td>

                                <td><a href="{{route('questionnaire.show',$questionnaire->title)}}" class="btn btn-success btn-outline-primary">جزییات</a></td>
                                <td><a class="btn btn-info btn-outline-primary" href="{{route('questions.create',$questionnaire->title)}}">طراحی سوالات</a></td>
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info">هیچ پرسشنامه ای ثبت نشده است</p>
                                <a class="btn btn-outline-primary btn-secondary btn-lg btn-block" href="{{ route('admin.panel',Auth::user()->name) }}">برگشت</a>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


