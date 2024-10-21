<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{ asset('back/images/users/2.jpg')}}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-user"></i> Profil
                        </a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item logOutForm">
                            @csrf
                            <div class="logout">
                                <i class="fas fa-power-off"></i> Çıxış
                            </div>
                        </form>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.index') }}" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">
                            Ana Səhifə
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-speedometer"></i><span class="hide-menu">
                                    Dashboard
                                </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="index-2.html">
                                Minimal
                            </a>
                        </li>
                        <li><a href="index2.html">Analytical</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
@section('js')
    <script>
        $('.logout').click(function() {
            $('.logOutForm').submit();
        });
    </script>
@endsection
