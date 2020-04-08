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
                            <thead align="center">

                                <tr>
                                    <th>پایه تحصیلی</th>
                                    <th>نام درس</th>
                                    <th>کد</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                            @forelse($courses as $course)
                            <tr>
                                <td>{{$course->grade}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->id}}</td>


                            @empty
                                <p align="center" class="alert alert-info">درسی برای ارائه ثبت نشده است</p>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
                    <div class=" card-footer">
                        <a class="btn btn-outline-primary btn-secondary " href="{{ route('admin.panel',Auth::user()->name) }}">برگشت</a>
                        <a class="btn btn-outline-primary btn-info "style="margin-left: 480px"
                           href="{{ route('course.create') }}">ثبت درس جدید</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


