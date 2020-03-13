@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="center" class="card">

                        <div class="card border-success ">

                            <div class="card-header" >جزییات مقاله  </div>
                            <div align="right" class="card-body">

                                <h4 class="card-title">عنوان : {{$questionnaire->title}}</h4>
                                <hr>
                                <h4 class="card-title">کاربرد : {{$questionnaire->purpose}}</h4>
                                <hr>
                                <h4 class="card-title">نام طراح : {{$questionnaire->user->name}}</h4>
                                <hr>
                                <h4 class="card-title">تاریخ اایجاد : {{jDate($questionnaire->created_at)}}</h4>
                                <hr>
                                <h4 class="card-title">تاریخ اخرین بروز رسانی : {{jDate($questionnaire->updated_at)}}</h4>
                                <hr>
                                <a class="btn btn-outline-primary btn-dark btn-block btn-lg" href="#">ویرایش</a>
                                <br>
                                <form action="#" class="post">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button  type="submit" onclick="return confirm('آیا برای حذف این مقاله مطمئن هستید؟؟')" class="btn btn-outline-danger btn-dark btn-block btn-lg">حذف </button>
                                </form>
                                <hr>
                                <a class="btn btn-outline-primary btn-light btn-block btn-lg" href="{{url('/home')}}">برگشت</a>

                            </div>

            </div>
        </div>
    </div>
@endsection
