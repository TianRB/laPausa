<div class="row fixed-top" id="dashboard_navbar">
    <nav class="col-12 py-2 bg-light"> 
        <ul class="nav d-flex justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item " href="#">Action</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar sesión
                  </a>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
            </li>
        </ul>
    </nav>
</div>