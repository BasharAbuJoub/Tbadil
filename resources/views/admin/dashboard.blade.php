@extends('components.main')


@section('content')



@component('components.subheader')
التحكم
@endcomponent

<div class="container" style="margin-top: 40px;">


    <div class="card">
        <div class="card-header" dir="rtl">
            <p class="card-header-title">الطلاب</p>
        </div>
        <div class="card-content">

        </div>
    </div>

    <br>
    <br>
    <div class="card">
        <div class="card-header"dir="rtl">
            <p class="card-header-title">الطلبات</p>
        </div>
        <div class="card-content">
            <all-books></all-books>
        </div>
    </div>

</div>





@endsection