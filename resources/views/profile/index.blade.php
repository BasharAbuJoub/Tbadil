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


    <div class="hero is-medium is-info">
        <div class="hero-body">


            <div class="container has-text-centered">

                <span class="icon">
                  <i class="fa fa-5x fa-user-o"></i>
                </span>
                <h1 class="subtitle is-3" style="margin-top: 20px;margin-bottom: 10px;">{{Auth::user()->name}}</h1>
                <h1 class="subtitle is-6" style="margin-top: 00px;">{{Auth::user()->university()->name_en}}</h1>
                <h1 class="subtitle is-5">الرصيد : {{Auth::user()->balance}} دينار</h1>



            </div>
        </div>
    </div>



    <div class="hero is-dark">
        <div class="hero-body">
            <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">استلام</p>
                        <p class="title">{{Auth::user()->purchaseOrders()->count()}}</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">بيع</p>
                        <p class="title">{{Auth::user()->sellOrders()->count()}}</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">كلّي</p>
                        <p class="title">{{Auth::user()->sellOrders()->count() + Auth::user()->purchaseOrders()->count()}}</p>
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

        <div class="box has-text-centered">

            <h3 class="subtitle">سجل الطلبات <span class="icon is-small"><i class="fa fa-clock-o"></i></span></h3>

            <style>
                .table th, .table td{
                    text-align: right;
                }
            </style>
            <b-tabs position="is-centered" v-model="activeTab" >
                <b-tab-item label="ملغى" icon-pack="fa" icon="ban">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>النوع</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        </tbody>

                    </table>

                </b-tab-item>
                <b-tab-item label="بيع" icon-pack="fa" icon="usd">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>النوع</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        </tbody>

                    </table>

                </b-tab-item>
                <b-tab-item label="شراء" icon-pack="fa" icon="shopping-cart">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>النوع</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        </tbody>

                    </table>

                </b-tab-item>
                <b-tab-item label="الكل" icon-pack="fa" icon="file-text-o">
                    <table class="table is-hoverable is-fullwidth" dir="rtl">

                        <thead>
                        <tr>
                            <th>العملية</th>
                            <th>النوع</th>
                            <th>الكتاب</th>
                            <th>القيمة</th>
                            <th>الحالة</th>
                            <th>الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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
                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        <tr>
                            <td>13325</td>
                            <td>شراء</td>
                            <td>العلوم العسكرية</td>
                            <td>3.00</td>
                            <td>تمت</td>
                            <td>
                                <a href="#" class="button is-small" title="Order page">
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

                        </tbody>

                    </table>

                </b-tab-item>


            </b-tabs>





        </div>





    </div>

@endsection