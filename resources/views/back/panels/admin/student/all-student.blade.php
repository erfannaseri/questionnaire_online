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
                            @if( count($students) > 0)
                                <tr>
                                    <th> --- </th>
                                    <th>تاریخ عضویت</th>
                                    <th>ایمیل</th>
                                    <th>نام کاربری</th>
                                    <th>پروفایل</th>

                                </tr>
                            @endif
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
                                <td>{{$student->username}}</td>
                                @if( !empty($student->photo))
                                    <td>fdsadsaf</td>
                                @else
                                    <td><img src="/images/profile-pic.png" class="rounded-circle" style="width:50px; height:50px"></td>
                                 @endif
                            </tr>
                            @empty
                                <p align="center" class="alert alert-info">هیچ دانش آموزی وجود ندارد</p>

                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

