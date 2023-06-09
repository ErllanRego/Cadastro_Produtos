<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary orange-btn" href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li style="padding: 20px">
                @if(Auth::user() != null)
                    <span class="m-r-sm text-muted welcome-message">Bem vindo, <strong>{{Auth::user()->name}}</strong></span>
                @endif
            </li>
            <li>
                @if(Auth::user() != null)
                    <a onclick="document.getElementById('logout').submit();">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                    <form action="{{route('logout')}}" id="logout" method="post">
                        {{ csrf_field() }}
                        {{-- method_field('DELETE') --}}
                    </form>
                @else
                <a href="{{route('login')}}">
                    Login
                </a>
                @endif
            </li>
        </ul>
    </nav>
</div>