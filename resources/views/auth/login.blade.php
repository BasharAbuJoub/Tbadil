@extends('components.main')

@section('content')
@component('components.subheader')
    تسجيل الدخول
@endcomponent




<div class="container" style="min-height: 60vh;">




    <div class="columns is-centered " style="margin-top: 3rem;">
        <div class="column is-half">

            <div class="card">
                <div class="card-content">

                    <form method="POST" action="{{ route('login') }}" class="has-text-right">
                        {{ csrf_field() }}


                        <div class="field">
                            <label class="label">البريد الإلكتروني</label>
                            <div class="control">
                                <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" placeholder="example@domain.com" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">كلمة السر</label>
                            <div class="control">
                                <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="كلمة السر" name="password" >

                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                            <a href="{{ route('password.request') }}">نسيت كلمة المرور ؟</a>
                        </div>

                        <div class="field">
                            <div class="control">
                                <b-checkbox style="direction: rtl;" name="remeber">تذكرني </b-checkbox>
                            </div>
                        </div>




                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">دخول</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
