<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route('applications.index') }}">Aplicaciones</a></li>
        <li><a href="{{ route('platforms.index') }}">Plataformas</a></li>
        {{-- <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li> --}}
      </ul>
    </div>
    <a href="/" class="text-xl normal-case btn btn-ghost">JobApps</a>
  </div>
  <div class="hidden navbar-center lg:flex">
    <ul class="px-1 menu menu-horizontal">
      <li><a href="{{ route('applications.index') }}">Aplicaciones</a></li>
      <li><a href="{{ route('platforms.index') }}">Plataformas</a></li>
      {{-- <li tabindex="0">
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li> --}}
      {{-- <li><a>Item 3</a></li> --}}
    </ul>
  </div>
  <div class="navbar-end">
    {{-- <a class="btn">Button</a> --}}
    <form action="{{ route('login.destroy') }}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-sm btn-ghost">
        <i class="fa-solid fa-right-from-bracket"></i>
      </button>
    </form>
  </div>
</div>
