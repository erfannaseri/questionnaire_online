<div class="col-md-4" style="margin-right: -200px;margin-left: -200px">
    <div class="btn-group-vertical">
        <a href="{{ route('student.all') }}" class="btn btn-info">دانش آموزان</a>
        <a href="{{ route('teacher.all') }}" class="btn btn-secondary">معلمان</a>
        <a href="{{ route('course.all') }}" class="btn btn-danger">کل دروس</a>
        <a href="{{ route('questionnaire.all') }}" class="btn btn-primary">سوالات</a>
        <a href="#" class="btn btn-success">پاسخ نامه سوالات</a>
        <a href="{{ route('admin.panel',Auth::user()->name) }}" class="btn btn-warning">خانه</a>
    </div>
</div>
