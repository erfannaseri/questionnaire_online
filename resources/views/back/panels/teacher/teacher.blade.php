@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-right: -200px;margin-left: -200px">
                <div class="btn-group-vertical">
                    <a href="#" class="btn btn-info">دروس شما</a>
                    <a href="#" class="btn btn-secondary">پرسشنامه</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3>{{ Auth::user()->name }}</h3></div>
                    <div class="card-body">
                    <p align="center">دبیر گرامی به پنل کاربری خود خوش امدید در این مکان میتوانید با استفاده از گزینه ها اعمال مربوطه را انجام دهید</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
