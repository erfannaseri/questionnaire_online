@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           @include('back.panels.admin.sideBar')
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
