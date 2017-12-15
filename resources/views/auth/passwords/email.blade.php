@extends('components.main')

@section('content')
<div class="container" style="padding: 4rem 0;">

    <div class="columns is-centered">


        <div class="column is-half">

            @if (session('status'))
                <b-notification type="is-success">
                    <p class="has-text-centered">

                        لقد تم ارسال رسالة تتضمن معلومات إعادة تعيين كلمة المرور

                    </p>
                </b-notification>
            @endif

            <div class="card">
                <div class="card-content">


                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}


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
                            <div class="control">
                                <button class="button is-primary">أرسل رسالة تغيير كلمة المرور</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


</div>
@endsection
