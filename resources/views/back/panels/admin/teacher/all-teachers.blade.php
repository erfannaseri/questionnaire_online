@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3 style="font-family: 'Courier New'">معلم ها</h3></div>

                    <div class="card-body">
                        <table class="table table-dark table-striped" >
                            <thead align="center">
                            @forelse($teachers as $teacher)
                                <tr>
                                    <th>تاریخ عضویت</th>
                                    <th>ایمیل</th>
                                    <th>نام</th>

                                </tr>
                            </thead>
                            <tbody align="center">
                            <tr>
                                <td>{{ jDate($teacher->created_at) }}</td>
                                <td>{{$teacher->email}}</td>
                                <td><a href="{{ route('student.show',$teacher->name) }}" class="btn btn-info">{{$teacher->name}}</a></td>
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

