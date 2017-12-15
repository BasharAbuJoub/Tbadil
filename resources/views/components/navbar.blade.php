<nav class="navbar  is-fixed-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{url('/')}}">
                <img src="{{asset('media/nav-logo2.png')}}" width="62" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbar-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbar-menu" class="navbar-menu">
            <div class="navbar-start">
            </div>
            <div class="navbar-end" style="direction: rtl;">
                <a class="navbar-item is-tab" href="{{url('/')}}">الرئيسية</a>
                @if(Auth::guest())
                    <a href="{{route('register')}}" class="navbar-item is-tab">التسجيل</a>
                    <a href="{{route('login')}}" class="navbar-item is-tab">دخول</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link is-tab" href="{{route('profile')}}">حسابي</a>
                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="{{route('profile')}}">الملف الشخصي</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="{{url('logout')}}">خروج</a>
                        </div>
                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link is-tab">الكتب</a>
                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="{{route('books.sell')}}">بيع</a>
                            <a class="navbar-item" href="{{route('books.buy')}}">شراء</a>
                        </div>
                    </div>

                    @if(\Illuminate\Support\Facades\Auth::user()->role > 2)
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link is-tab">لوحة التحكم</a>
                            <div class="navbar-dropdown is-right">
                                <a class="navbar-item" href="{{route('admin.books')}}">الكتب</a>
                                <a class="navbar-item" href="{{route('admin.universities')}}">الجامعات</a>
                                <a class="navbar-item" href="{{route('admin.users')}}">الأعضاء</a>
                            </div>
                        </div>

                    @endif


                @endif

            </div>
        </div>
    </div>
</nav>

