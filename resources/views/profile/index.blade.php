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
                <h1 class="subtitle is-3" style="margin-top: 20px;margin-bottom: 10px;">بشار حسام أبو جعب</h1>
                <h1 class="subtitle is-6" style="margin-top: 00px;">جامعة العلوم التطبيقية الخاصة</h1>

                <h1 class="subtitle is-5">الرصيد : 5.4 دينار</h1>



            </div>
        </div>
    </div>



    <div class="hero is-dark">
        <div class="hero-body">
            <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">استلام</p>
                        <p class="title">3</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">بيع</p>
                        <p class="title">3</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">كلّي</p>
                        <p class="title">6</p>
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

            <div class="tabs is-centered">
                <ul>
                    <li>
                        <a>
                            <span class="icon is-small"><i class="fa fa-ban"></i></span>
                            <span>ملغى</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="icon is-small"><i class="fa fa-usd"></i></span>
                            <span>بيع</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="icon is-small"><i class="fa fa-shopping-cart"></i></span>
                            <span>شراء</span>
                        </a>
                    </li>
                    <li class="is-active">
                        <a>
                            <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
                            <span>الكل</span>
                        </a>
                    </li>
                </ul>
            </div>

            <style>
                .table th, .table td{
                    text-align: right;
                }
            </style>
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



        </div>





    </div>

@endsection