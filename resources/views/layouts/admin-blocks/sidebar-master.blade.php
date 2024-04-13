<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <i class="fas fa-user-circle fa-2x"></i>
            </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header text-uppercase">{{__('основное')}}</li>

            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('master.index')}}" class="nav-link @yield('main')">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>{{__('Расписание')}}</p>
                </a>
            </li>


            <li class="nav-item mt-5">
                <form id="logout" method="post" action="{{route('logout')}}">
                    @csrf
                    <a href="#" class="nav-link" onclick="document.getElementById('logout').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Выйти
                        </p>
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
