<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Larazon.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('pictures.index')}}">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('pictures.create')}}">Aggiungi Quadro</a></li>
            <li><a class="dropdown-item" href="#">Modifica Quadro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
        @if (!auth()->check())
    
        <li class="nav-item active"><a class="nav-link" href="/login">Accedi</a></li>
        <li class="nav-item active"><a class="nav-link" href="/register">Registrati</a></li>

        @else

        <li class="nav-item active"><a class="nav-link" href="{{route('users.profile')}}">Profilo</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{route('user.my-pictures')}}">I miei quadri</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{route('pictures.create')}}">Nuovo quadro</a></li>
        <li class="nav-item active">

            <form  action="/logout" method="post">
        
                @csrf
        
                <input class="nav-link text-danger" type="submit" value="Logout">
        
            </form>

        </li>

      @endif

      </ul>
      
    </div>
  </div>
</nav>