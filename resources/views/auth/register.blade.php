@extends('components.main')

@section('content')


    @component('components.subheader')
        التسجيل
    @endcomponent
<div class="container" style="margin-top: 3rem;margin-bottom: 10rem;">

    <div class="columns is-centered">
        <div class="column is-half">

            <div class="card">


                <header class="card-header" dir="rtl">
                    <p class="card-header-title">
                        يرجى تعبئة البيانات التالية
                    </p>
                </header>




                <div class="card-content">

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        @if(!empty($erros))
                            {{dd($errors)}}
                        @endif


                        <div class="field">
                            <label class="label">الإسم الثلاثي</label>
                            <div class="control">
                                <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" placeholder="الإسم" type="text" name="name" value="{{ old('name') }}" required>
                            </div>
                            @if ($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">البريد الإلكتروني</label>
                            <div class="control">
                                <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" placeholder="example@domain.com" type="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>


                        <div class="columns" dir="rtl">
                            <div class="column">
                                <div class="field">
                                    <label class="label">كلمة المرور</label>
                                    <div class="control">
                                        <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" placeholder="كلمة المرور" type="password" name="password" value="{{ old('password') }}" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">تأكيد كلمة المرور</label>
                                    <div class="control">
                                        <input class="input" placeholder="أعد كتابة كلمة المرور" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="columns" dir="rtl">
                            <div class="column">
                                <div class="field">
                                    <label class="label">رقم الهاتف</label>
                                    <div class="control">
                                        <input class="input {{ $errors->has('phone') ? ' is-danger' : '' }}" placeholder="الهاتف"  name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                    @if ($errors->has('phone'))
                                        <p class="help is-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="column">
                                <b-field label="تاريخ الميلاد">
                                    <b-datepicker
                                            icon-pack="fa"
                                            name="birth"
                                            placeholder="الميلاد"
                                            icon="calendar"
                                            :readonly="false">
                                    </b-datepicker>
                                </b-field>
                            </div>
                        </div>




                        <uni-input></uni-input>




                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">تسجيل</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>

</div>
@endsection
