<div class="col-lg-8">
    <h2>{{ config('apps.user.title') }}</h2>
    <ol class="breadcrumb" style="margin-bottom: 10px">
        <li>
            <a href="{{ route('dashboard.index') }}" style="text-decoration: none">Trang chủ/</a>
        </li>
        <li class="active"><strong>{{$title}}</strong></li>
    </ol>
</div>
