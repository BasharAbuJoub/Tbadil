@extends('components.main')

@section('content')
<div class="container" style="padding: 4rem 0;">

    <div class="columns is-centered">

        <div class="column is-half">

            @if (session('status'))
                <b-notification type="is-success">
                    {{ session('status') }}
                </b-notification>
            @endif

            <div class="card">
                <div class="card-content">



                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">


                        <div class="field">
                            <label class="label">البريد الإلكتروني</label>
                            <div class="control">
                                <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" placeholder="example@domain.com" type="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>


                        <div class="field">
                            <label class="label">كلمة المرور</label>
                            <div class="control">
                                <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" placeholder="كلمة المرور" type="password" name="password" value="{{ old('password') }}" required>
                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">تأكيد كلمةالمرور</label>
                            <div class="control">
                                <input class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" placeholder="أعد كتابة كلمة المرور" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">إعادة تعيين</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>

        </div>
    </div>

</div>
@endsection
