@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{route('questionnaire.create')}}" class="btn btn-outline-dark">ایجاد بسته سوالالت جدید +</a>
                        <a href="{{route('questionnaire.index',auth()->user()->name)}}" class="btn btn-outline-dark">مشاهده پرسشنامه این کاربر</a>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">پرسشنامه های من</div>
                <ul class="list-group">
                    @forelse ($questionnaires as $questionnaire )
                    <li class="list-group-item">
                        <a href="{{route('questionnaire.show',$questionnaire->title)}}">{{ $questionnaire->title }}</a>
                    </li>
                    @empty
                        <h4 align="center">کاربر گرامی شما هیچ پرسشنامه ای ثبت نکردیه اید</h4>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
