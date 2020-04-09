
@if ( session('successUpdate'))
    <hr>
    <h4 align="center" class="alert alert-success" style="font-family: 'Courier New'">{{ session('successUpdate')}}</h4>
    <hr>
@endif
@if ( session('successUpdate'))
    <hr>
    <h4 align="center" class="alert alert-danger" style="font-family: 'Courier New'">{{ session('brokenUpdate')}}</h4>
    <hr>
@endif
@if ( session('successDelete'))
    <hr>
    <h4 align="center" class="alert alert-danger" style="font-family: 'Courier New'">{{ session('successDelete')}}</h4>
    <hr>
@endif
@if ( session('brokenDelete'))
    <hr>
    <h4 align="center" class="alert alert-danger" style="font-family: 'Courier New'">{{ session('brokenDelete')}}</h4>
    <hr>
@endif

@if( session('successAddTeacher'))
    <h4 class="alert alert-success" style="font-family: 'Courier New'">{{ session('successAddTeacher') }}</h4>
@endif
@if( session('brokenAddTeacher'))
        <hr>
        <h4 class="alert alert-danger" style="font-family: 'Courier New'">{{ session('brokenAddTeacher') }}</h4>
        <hr>
@endif
