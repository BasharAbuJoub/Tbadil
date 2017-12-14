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
            <div class="navbar-end">
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
                @endif
                <a class="navbar-item is-tab" href="{{url('/')}}">الرئيسية</a>
            </div>
        </div>
    </div>
</nav>

{{--Burger Script--}}
<script>

    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });




</script>