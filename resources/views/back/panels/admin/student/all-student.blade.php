@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

             @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header"><h3 style="font-family: 'Courier New'">دانش آموزان</h3></div>

                    <div class="card-body">
                        <table class="table table-dark table-striped" >
                            <thead align="center">

                                <tr>
                                    <th> --- </th>
                                    <th>تاریخ عضویت</th>
                                    <th>ایمیل</th>
                                    <th>نام</th>

                                </tr>
                            </thead>
                            @forelse($students as $student)
                            <tbody align="center">
                            <tr>
                                <form action="{{ route('student.destroy',$student->username) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-secondary btn-outline-danger">حذف کاربر</button></td>
                                </form>
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

