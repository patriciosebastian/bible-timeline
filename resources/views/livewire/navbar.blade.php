<div class="navbar">
    {{-- navbar start --}}
    <div class="navbar-start"></div>
    {{-- navbar center --}}
    <div class="navbar-center">
        <a href="{{ route('main-page-timeline') }}" class="btn btn-ghost text-2xl">Bible Timeline</a>
    </div>
    {{-- navbar end --}}
    <div class="navbar-end">
      <div class="dropdown" x-data="{ open: false }" @click.away="open = false">
        {{-- hamburger button --}}
        <div tabindex="0" role="button" class="btn btn-ghost" @click="open = !open">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        {{-- dropdown content --}}
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow !right-0" x-show="open" @click="open = false">
          <li><a href="{{ route('main-page-timeline') }}" wire:navigate.hover>Home</a></li>
          <li><a href="{{ route('old-testament-timeline') }}" wire:navigate.hover>OT Timeline</a></li>
          <li><a href="{{ route('apocrypha-timeline') }}" wire:navigate.hover>Apocrypha</a></li>
          <li><a href="{{ route('new-testament-timeline') }}" wire:navigate.hover>NT Timeline</a></li>
          {{-- <li><a href="{{ route('dead-sea-scrolls-timeline') }}" wire:navigate.hover>Dead Sea Scrolls</a></li> --}}
          <li><a href="{{ route('sources') }}" wire:navigate.hover>Sources</a></li>
        </ul>
      </div>
    </div>
</div>
