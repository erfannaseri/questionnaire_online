@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-right: -200px;margin-left: -200px">
               @include('back.panels.student.sideBar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3>{{ Auth::user()->name }}</h3></div>

                    <div class="card-body">
                        <p align="center">دانش آموز گرامی اینجا پنل کاربری شما است که در ان میتوانید لیست دروس سال تحصیلی خود و نمرات و آخرین اخبار را دنبال نمایید</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
