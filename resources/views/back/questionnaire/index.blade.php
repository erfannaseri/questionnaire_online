@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">لیست کامل پرسشنامه ها</div>

                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>عنوان</th>
                                <th>کاربرد</th>
                                <th>طراح</th>
                                <th>جزییات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($questionnaires as $questionnaire)
                            <tr>
                                <td>{{$questionnaire->title}}</td>
                                <td>{{$questionnaire->purpose}}</td>
                                <td>{{$questionnaire->user->name}}</td>
                                <td><a href="{{route('questionnaire.show',$questionnaire->title)}}" class="btn btn-success btn-outline-primary">جزییات</a></td>
                            </tr>
                            @empty
                                <p class="alert alert-info">هیچ پرسشنامه ای ثبت نشده است</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
