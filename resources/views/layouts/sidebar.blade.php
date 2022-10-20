<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if($activePage == 'dashboard') active @endif" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i>  {{ __('system.dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($activePage == 'settings') active @endif" href="{{ route('settings') }}">
                    <i class="fa-solid fa-gears"></i>  {{ __('system.settings') }}
                </a>
            </li>
            <li class="nav-item sub-collapse">
                <a class="nav-link" data-toggle="collapse" @if($activeButton =='settings') aria-expanded="true" @endif href="#configuracoesAuth">
                    <i class="fa-solid fa-gears"></i>  {{ __('system.settings') }}
                    <i class="fa-solid fa-caret-left arrow"></i>
                </a>
                <div class="div-nav-sub collapse @if($activeButton =='settings') show @endif" id="configuracoesAuth">
                    <ul class="nav-sub">
                        <li class="nav-item">
                            <a class="nav-link @if($activePage == 'user') active @endif" href="{{ route('users.index') }}">
                                <i class="fa-solid fa-user-group"></i>
                                {{ __("system.user") }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($activePage == 'permission') active @endif" href="{{ route('permissions.index') }}">
                                <i class="fa-solid fa-file-lines"></i>
                                {{ __("system.permission") }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($activePage == 'role') active @endif" href="{{ route('roles.index') }}">
                                <i class="fa-solid fa-lock"></i>
                                {{ __("system.role") }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-file"></i> Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-user-group"></i>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-file-lines"></i>
                    Relatórios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-layer-group"></i>
                    Integrações
                </a>
            </li>
        </ul>

    </div>
</nav>
