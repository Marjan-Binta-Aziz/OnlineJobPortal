        <!-- header -->
        <section id="header">
            <div class="menu-bar">
                <nav class="navbar navbar-expand-lg nav-left">
                    <div class="container">
                      <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{asset('frontend/images/logo2.png')}}" alt="logo" width="40px" height="40px"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">All</span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-right">
                            @if (Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.alljobs') }}">All Jobs</a>
                              </li>
                              {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.companies') }}">Companines</a>
                              </li> --}}
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Jobs Catagories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach($cat as $all_cat)
                                  <li><a class="dropdown-item" href="#">{{$all_cat->c_name}}</a></li>
                                  @endforeach
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('front.allblog') }}">Blogs</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('user.index') }}">My Dashboard</a>
                              </li>
                              <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                               </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                              </li>
                              @else
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.alljobs') }}">All Jobs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.companies') }}">Companines</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Jobs Catagories
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach($cat as $all_cat)
                              <li><a class="dropdown-item" href="#">{{$all_cat->c_name}}</a></li>
                              @endforeach
                            </ul>

                          </li>
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('front.allblog') }}">Blogs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
@endif
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </section>
