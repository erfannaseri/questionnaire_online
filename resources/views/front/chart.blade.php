@extends('front.index')

@section('title')
    برنامه امتحانات
@stop



@section('main')
    <section class="site-section about-us-section" id="about-us-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div align="center" class="card">

                        <div class="card border-success ">

                            <div class="card-header" >برنامه تاریخ امتحانات
                            </div>
                            <div class="card-body">
                                <table class="table table-dark table-striped">
                                    <thead style="margin-left: 100px">
                                    <tr dir="rtl" align="center">

                                        <th>امتحان</th>
                                        <th>درس</th>
                                        <th>پایه تحصیلی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($charts as $chart)
                                    <tr dir="rtl" align="center">

                                            <td>{{ jDate($chart->created_at) }}</td>
                                            <td>{{$chart->title}}</td>
                                            <td>{{$chart->purpose}}</td>
                                    </tr>
                                    @empty
                                        <p align="center" class="alert alert-info">هیچ پرسشنامه ای ثبت نشده است</p>
                                        <a class="btn btn-outline-primary btn-secondary btn-lg btn-block" href="{{url('/home')}}">برگشت</a>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                                <div class="card-footer">

                                </div>



                        </div>

                    </div>
                </div>
            </div>
    </section>

@stop

