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
                                    @forelse($charts as $chart)
                                        <thead style="margin-left: 100px">
                                        <tr dir="rtl" align="center">

                                            <th>ساعت برگزاری</th>
                                            <th>امتحان</th>
                                            <th>درس</th>
                                            <th>پایه تحصیلی</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr dir="rtl" align="center">

                                            <td>{{ substr(Verta::instance($chart->dateExam),10) }}</td>
                                            <td>{{ substr(Verta::instance($chart->dateExam),0,10) }}</td>
                                            <td>{{$chart->grade}}</td>
                                            <td>{{$chart->title }}</td>
                                        </tr>
                                        @empty
                                            <p align="center" class="alert alert-info">در 24 ساعت اینده آزمونی برگزار نمیشود</p>
                                            <a class="btn btn-outline-primary btn-secondary btn-lg btn-block" href="{{url('/')}}">برگشت</a>
                                        @endforelse

                                        </tbody>
                                </table>

                            </div>
                            <div class="card-footer" >

                            </div>



                        </div>

                    </div>
                </div>
            </div>
    </section>

@stop

