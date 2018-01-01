@extends('components.main')


@section('content')


    <div class="hero is-light">
        <div class="hero-body">
            <div class="container has-text-right">
                <h1 class="title">
                    الملف الشخصي
                    <span class="icon has-text-info">
                        <i class="fa fa-angle-left"></i>
                    </span>
                </h1>


            </div>
        </div>
    </div>


    <div class="hero is-medium is-primary is-bold" >
        <div class="hero-body" style="padding: 4rem 0;">


            <div class="container has-text-centered">

                <span class="icon">
                  <i class="fa fa-5x fa-user-o"></i>
                </span>
                <h1 class="subtitle is-3" style="margin-top: 20px;margin-bottom: 10px;">{{$user->name}}</h1>
                <h1 class="subtitle is-6" style="margin-top: 00px;">{{$user->university()->name_en}}</h1>
                <h1 class="subtitle is-5">الرصيد : {{$user->balance}} دينار</h1>



            </div>
        </div>
    </div>



    <div class="hero is-dark">
        <div class="hero-body">
            <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">استلام</p>
                        <p class="title">{{$user->purchaseOrders()->count()}}</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">بيع</p>
                        <p class="title">{{$user->sellOrders()->count()}}</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">كلّي</p>
                        <p class="title">{{$user->sellOrders()->count() + $user->purchaseOrders()->count()}}</p>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>



    <div class="container" style="margin-bottom: 100px;">

        @if(session()->has('updated'))
            <b-notification type="is-success">
                <p class="has-text-centered">
                    تم تحديث الملف الشخصي بنجاح
                </p>
            </b-notification>
        @endif

        <div class="card" style="margin-bottom: 20px;">
            <div class="card-header " dir="rtl">
                <p class="card-header-title ">
                    البيانات الشخصية
                </p>
            </div>
            <div class="card-content">

                <form action="{{route('profile.update')}}" method="post">
                    {{csrf_field()}}
                    <div class="columns is-centered">

                        <div class="column">
                            <div class="field">
                                <label class="label">رقم الهاتف</label>
                                <div class="control">
                                    <input class="input {{ $errors->has('phone') ? ' is-danger' : '' }}" placeholder="الهاتف"  name="phone" value="{{$user->phone}}" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <p class="help is-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                        </div>


                        <div class="column">
                            <div class="field">
                                <label class="label">الإسم</label>
                                <div class="control">
                                    <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" placeholder="الإسم"  name="name" value="{{ $user->name }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">

                            <div class="field">
                                <label class="label">البريد الإلكتروني</label>
                                <div class="control">
                                    <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" placeholder="example@domain.com" type="email" name="email" value="{{$user->email}}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                        </div>





                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary">تحديث البيانات</button>
                        </div>
                    </div>









                </form>

            </div>
        </div>


        <div class="box has-text-centered">

            <h3 class="subtitle">سجل الطلبات <span class="icon is-small"><i class="fa fa-clock-o"></i></span></h3>

            <b-tabs position="is-centered"  >
                <b-tab-item label="بيع" icon-pack="fa" icon="usd">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->sellOrders()->get() as $order )
                            <tr>
                                <td><a href="{{route('order', ['id'=> $order->id])}}">{{$order->id}}</a></td>
                                <td>{{$order->book()->name_ar}}</td>
                                <td>{{$order->book()->price}}د</td>
                                <td>{{$order->status == 1 ? 'تمت ' : 'انتظار'}}</td>
                                <td>
                                    <a href="{{route('order', ['id'=> $order->id])}}" class="button is-small" title="Order page">
                                            <span class="icon is-small">
                                              <i class="fa fa-info"></i>
                                            </span>
                                    </a>
                                    <a href="#" class="button is-small" title="Cancel">
                                            <span class="icon is-small">
                                              <i class="fa fa-trash-o"></i>
                                            </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </b-tab-item>
                <b-tab-item label="شراء" icon-pack="fa" icon="shopping-cart">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->purchaseOrders()->get() as $order )
                            <tr>
                                <td><a href="{{route('order', ['id'=> $order->id])}}">{{$order->id}}</a></td>
                                <td>{{$order->book()->name_ar}}</td>
                                <td>{{$order->book()->price}}د</td>
                                <td>{{$order->status == 1 ? 'تمت ' : 'انتظار'}}</td>
                                <td>
                                    <a href="{{route('order', ['id'=> $order->id])}}" class="button is-small" title="Order page">
                                            <span class="icon is-small">
                                              <i class="fa fa-info"></i>
                                            </span>
                                    </a>
                                    <a href="#" class="button is-small" title="Cancel">
                                            <span class="icon is-small">
                                              <i class="fa fa-trash-o"></i>
                                            </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </b-tab-item>

            </b-tabs>





        </div>





    </div>



@endsection