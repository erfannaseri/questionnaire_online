@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3 style="font-family: 'Courier New'">لیست کل دروس </h3></div>

                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            @forelse($courses as $course)
                                <tr>
                                    <th>نام درس</th>
                                    <th>سال تحصیلی</th>
                                    <th>کد</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->grade}}</td>
                                <td>{{$course->id}}</td>

                                <td><a href="{{route('questionnaire.show',$questionnaire->title)}}" class="btn btn-success btn-outline-primary">جزییات</a></td>
                                <td><a class="btn btn-info btn-outline-primary" href="{{route('questions.create',$questionnaire->title)}}">طراحی سوالات</a></td>
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info">درسی برای ارائه ثبت نشده است</p>
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


