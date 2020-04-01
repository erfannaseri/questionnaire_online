@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header">ایجاد پرسشنامه جدید</div>

                    <div class="card-body">
                        <form action="{{route('questionnaire.store')}}" method="post">
                            @csrf
                            <div align="right" class="form-group">
                                <label  for="title">:  نام امتحان</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                               <br>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div align="right" class="form-group">
                                <label  for="grade"> : پایه تحصیلی</label>
                                <input type="text" id="grade" name="grade" value="{{ old('grade') }}" class="form-control @error('grade') is-invalid @enderror">
                                <br>
                                @error('grade')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div align="right" class="form-group">
                                <label  for="date-exam"> : تاریخ امتحان</label>
                                <input type="text" id="date-exam" name="date-exam" value="{{ old('date-exam') }}" class="form-control @error('date-exam') is-invalid @enderror">
                                <br>
                                @error('date-exam')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div align="right" class="form-group">
                                    <label for="start-exam">ساعت برگزاری</label>
                                    <select  class="form-control" name="start-exam" id="start-exam" >
                                        <option value="02:30" selected >8:00 </option>
                                        <option value="05:00" >10:30 </option>
                                        <option value="08:30" >14:00 </option>
                                        <option value="16:30" >16:30 </option>
                                    </select>
                            </div>
                            <div align="right" class="form-group">
                                <label  for="time-exam"> : زمان لازم</label>
                                <input type="text" id=time-exam" name="time-exam"  value="{{ old('time-exam') }}"class="form-control @error('time-exam') is-invalid @enderror">
                                <small >زمان را بر حسب دقیقه و فقط عددی وارد نمایید</small>
                                <br>
                                @error('time-exam')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <input class="btn btn-block btn-lg btn-secondary btn-outline-success" type="submit" value="ثبت پرسشنامه ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
