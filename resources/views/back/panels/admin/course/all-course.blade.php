@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3 style="font-family: 'Courier New'">لیست کل دروس </h3>
                     @include('layouts.alerts')
                    </div>

                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            @if (count($courses) > 0)

                            <thead align="center">
                                <tr>
                                    <th colspan="2">---</th>
                                    <th>پایه تحصیلی</th>
                                    <th>نام درس</th>
                                    <th>کد</th>
                                </tr>
                            </thead>
                            @endif
                            <tbody align="center">
                            @forelse($courses as $course)
                            <tr>
                                <form action="{{ route('course.destroy',$course->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-dark btn-outline-danger">حذف </button></td>
                                </form>

                                <td><a href="{{ route('course.edit',$course->id) }}" class="btn btn-dark btn-outline-success">ویرایش</a></td>

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


