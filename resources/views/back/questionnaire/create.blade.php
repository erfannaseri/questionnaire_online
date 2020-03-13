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
                                <label  for="title"> : عنوان</label>
                                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror">
                               <br>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div align="right" class="form-group">
                                <label  for="purpose"> : کاربرد</label>
                                <input type="text" id="purpose" name="purpose" class="form-control @error('purpose') is-invalid @enderror">
                                <br>
                                @error('purpose')
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
