<ul class="nav navbar-nav pull-right"> 
    @if(Auth::Guest())
        <li>
            <a href="{{route('register')}}">Register
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </li> 
        <li>
            <a href="{{route('login')}}">Login
                <span class="glyphicon glyphicon-log-in"></span>
            </a>
        </li>
    @else 
        <li>
            <a href="#Logoff">Logoff</a></li> 
                <span class="glyphicon glyphicon-log-out"></span>
            </a>
        </li>
    @endif
</ul>