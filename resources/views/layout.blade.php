
<div class="container-fluid my-3">
   <div class="row">
  <div class="col-md-3">
    <div class="sidebar">
      <div class="accordion" id="menuAccordion">
        <div class="card">
          <div class="card-header" id="headingOne">
                <h2>Dashboard</h2>
          </div>
        
          
          <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
                        {{ Auth::user()->name ?? '-' }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            
            <div class="card-body">
              <ul class="list-group">
                
                <li class="list-group-item"><a href="#">Books</a></li>
                <li class="list-group-item"><a href="#">Create Book</a></li>
              </ul>
            
           

          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Content area -->
 <div class="col-md-9">
                @yield('content')
            </div>

   </div>
   </div>