<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        {{--            @if($countNotifications)--}}
        {{--                <li class="nav-item dropdown">--}}
        {{--                    <a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--                        <i class="far fa-bell"></i>--}}
        {{--                        <span class="badge badge-warning navbar-badge">{{ $countNotifications }} </span>--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
        {{--                        <span class="dropdown-header">{{ $countNotifications }} notifications</span>--}}
        {{--                        <div class="dropdown-divider"></div>--}}
        {{--                        Menu à créer !--}}
        {{--                        <div class="dropdown-divider"></div>--}}
        {{--                        <a href="#" class="dropdown-item dropdown-footer">Voir toutes les notifications</a>--}}
        {{--                    </div>--}}
        {{--                </li>--}}
        {{--            @endif--}}
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Clients
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-menu-item href="#" :sub=true :active=false>
                            Clients
                        </x-menu-item>
                        <x-menu-item href="#" :sub=true :active=false>
                            Adresses
                        </x-menu-item>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Catalogue
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backbrands.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Marques</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backproducts.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produits</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="{{ route('backbrands.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Actualités</p>
                    </a>
                </li>



                {{--                    <li class="nav-item has-treeview">--}}
                {{--                        <a href="{{ route('brands.index') }}" class="nav-link">--}}
                {{--                            <i class="nav-icon fas fa-store"></i>--}}
                {{--                            <p>--}}
                {{--                                Marques--}}
                {{--                                <i class="right fas fa-angle-left"></i>--}}
                {{--                            </p>--}}
                {{--                        </a>--}}
                {{--                        <ul class="nav nav-treeview">--}}
                {{--                            <x-menu-item href="{{ route('brands.index') }}" :sub=true :active=false>--}}
                {{--                                Marques--}}
                {{--                            </x-menu-item>--}}
                {{--                            <x-menu-item href="#" :sub=true :active=false>--}}
                {{--                                Catalogue--}}
                {{--                            </x-menu-item>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                <x-menu-item href="#" icon="shopping-basket" :active=false>
                    Commandes
                </x-menu-item>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
