@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">
                        <h3 style="font-family: 'Courier New'">معلم ها</h3>

                        @include('layouts.alerts')
                    </div>

                    <div class="card-body">
                        <table class="table table-dark table-striped" >
                            <thead align="center">

                                <tr>
                                    <td colspan="2"> --- </td>
                                    <th>تاریخ ثبت نام</th>
                                    <th>ایمیل</th>
                                    <th>نام</th>

                                </tr>
                            </thead>
                            @forelse($teachers as $teacher)
                            <tbody align="center">
                            <tr>
                                <td>ویرایش</td>
                                <td>حذف</td>
                                <td>{{ jDate($teacher->created_at) }}</td>
                                <td>{{$teacher->email}}</td>
                                <td><a href="{{ route('student.show',$teacher->name) }}" class="btn btn-info">{{$teacher->name}}</a></td>
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info" style="font-family: 'Courier New'">هیچ معلمی را ثبت نام نکرده اید</p>

                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class=" card-footer">
                        <a class="btn btn-outline-primary btn-secondary " href="{{ route('admin.panel',Auth::user()->name) }}">برگشت</a>
                        <a class="btn btn-outline-primary btn-info "style="margin-left: 480px"
                           href="{{ route('teacher.create') }}"> ثبت معلم جدید</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

