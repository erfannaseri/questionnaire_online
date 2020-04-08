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
                        <table class="table table-dark table-striped" >
                            <thead align="center">
                            @forelse($students as $student)
                                <tr>
                                    <th>تاریخ عضویت</th>
                                    <th>ایمیل</th>
                                    <th>نام</th>

                                </tr>
                            </thead>
                            <tbody align="center">
                            <tr>
                                <td>{{ jDate($student->created_at) }}</td>
                                <td>{{$student->email}}</td>
                                <td><a href="{{ route('student.show',$student->name) }}" class="btn btn-info">{{$student->name}}</a></td>
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info">هیچ دانش آموزی وجود ندارد</p>
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

