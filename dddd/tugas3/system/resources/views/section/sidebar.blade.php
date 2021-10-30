<ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('beranda')}}">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ url('produk') }}">
              <i class="material-icons">dashboard</i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ url('kategori') }}">
              <i class="material-icons">dashboard</i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('user')}}">
              <i class="material-icons">dashboard</i>
              <p>user Profil</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('Login')}}">
              <i class="material-icons">dashboard</i>
              <p>Login</p> 
            </a>
          </li> 
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('Login')}}">
              <i class="material-icons">dashboard</i>
              <p>Logout</p>
              <form action="{{ url('Login') }}" method="GET">
            </a>
          </li>
          
         
          <!-- your sidebar here -->
        </ul>