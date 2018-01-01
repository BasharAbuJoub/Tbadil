@extends('components.main')

@section('content')

    @component('components.subheader')
        بيع الكتب
    @endcomponent




    <div class="container">
        <div class="card" style="margin-top: 50px;">
            <div class="card-content">

                <uni-books></uni-books>

            </div>
        </div>
    </div>

@endsection