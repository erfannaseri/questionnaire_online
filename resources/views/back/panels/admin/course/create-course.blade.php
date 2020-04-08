@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('back.panels.admin.sideBar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" align="center"><h3 style="font-family: 'Courier New'">{{ __('ثبت درس جدید') }}</h3></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('course.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('عنوان درس') }}</label>

                                <div class="col-md-6">
                                    <input id="grade" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="email">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grade"  class="col-md-4 col-form-label text-md-right">پایه تحصیلی</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="grade" name="grade" required>
                                        <option value="1">پایه اول</option>
                                        <option value="2">پایه دوم</option>
                                        <option value="3">پایه سوم</option>
                                        <option value="4">پایه چهارم</option>
                                        <option value="5">پایه پنجم</option>
                                        <option value="6">پایه ششم</option>
                                        <option value="7">پایه هفتم</option>
                                        <option value="8">پایه هشتم</option>
                                        <option value="9">پایه نهم</option>
                                        <option value="10">دهم</option>
                                        <option value="11">پایه یازدهم</option>
                                        <option value="12">پایه دوازدهم</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ثبت') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

