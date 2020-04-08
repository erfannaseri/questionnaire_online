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
                        <p align="center">ادمین گرامی لطفا ضمن رعایت موارد امنیتی از گزینه ها استفاده نمایید</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
