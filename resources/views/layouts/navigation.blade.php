<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" src="{!! asset('img/logo.png') !!}" style="width:90%"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{--Auth::user()->name--}}</span>

                    </a>

                </div>
                <div class="logo-element">
                    <img alt="image" src="{!! asset('img/logo.png') !!}" style="width:50%" />
                </div>
            </li>
            <li class="{{request()->routeIs('home') ? 'active' : ''}}">
                <a href="{{route('home')}}">
                    <i class="fa fa-home _i"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>
            
            
            @if(Auth::user() != null)
                <li class="{{request()->routeIs('product.create') ? 'active' : ''}}">
                    <a href="{{route('product.create')}}">
                        <i class="fa fa-shopping-cart _i"></i>
                        <span class="nav-label">Cadastro de Produtos</span>
                    </a>
                </li>
                
            @endif
            
        </ul>

    </div>
</nav>
