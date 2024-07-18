<div>
    {{-- Mobile --}}
    <ul class="timeline timeline-vertical lg:hidden justify-center h-[var(--mobile-minus-navbar)] items-center text-lg">
        {{-- possibly extend distance between each item? mobile or both? --}}
        <li>
          <div class="timeline-start">500 BC</div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end timeline-box">
            Old Testament Compilation
            <a href="{{ route('old-testament-timeline') }}" class="text-sm text-nowrap underline text-gray-400">click to view timeline</a>
          </div>
          <hr class="bg-success" />
        </li>
        <li>
          <hr class="bg-success" />
          <div class="timeline-start timeline-box">
            Apocrypha Compilation
            <a href="{{ route('apocrypha-timeline') }}" class="text-sm text-nowrap underline text-gray-400">click to view timeline</a>
          </div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end">300 BC - 100 AD</div>
          <hr class="bg-success" />
        </li>
        {{-- <li>
            <hr class="bg-success" />
            <div class="timeline-start">300 BC - 68 AD</div>
            <div class="timeline-middle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="text-success h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="timeline-end timeline-box relative">
              Dead Sea Scrolls
              <a href="{{ route('dead-sea-scrolls-timeline') }}" class="text-sm text-nowrap underline text-gray-400">click to view timeline</a>
            </div>
            <hr class="bg-success" />
        </li> --}}
        <li>
          <hr class="bg-success" />
          <div class="timeline-start">367 AD</div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end timeline-box relative">
            New Testament Compilation
            <a href="{{ route('new-testament-timeline') }}" class="text-sm text-nowrap underline text-gray-400">click to view timeline</a>
          </div>
        </li>
    </ul>

    {{-- Desktop --}}
    <ul class="timeline hidden lg:flex timeline-horizontal justify-center h-[var(--desktop-minus-navbar)] items-center text-lg">
        <li>
          <div class="timeline-start">500 BC</div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end timeline-box">
            Old Testament Compilation
            <a href="{{ route('old-testament-timeline') }}" class="text-sm text-nowrap underline text-gray-400 block text-center">click to view timeline</a>
          </div>
          <hr class="bg-success" />
        </li>
        <li>
          <hr class="bg-success" />
          <div class="timeline-start">300 BC - 100 AD</div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end timeline-box">
            Apocrypha Compilation
            <a href="{{ route('apocrypha-timeline') }}" class="text-sm text-nowrap underline text-gray-400 block text-center">click to view timeline</a>
          </div>
          <hr class="bg-success" />
        </li>
        {{-- <li>
            <hr class="bg-success" />
            <div class="timeline-start">300 BC - 68 AD</div>
            <div class="timeline-middle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="text-success h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="timeline-end timeline-box">
              Dead Sea Scrolls
              <a href="{{ route('dead-sea-scrolls-timeline') }}" class="text-sm text-nowrap underline text-gray-400 block text-center">click to view timeline</a>
            </div>
            <hr class="bg-success" />
        </li> --}}
        <li>
          <hr class="bg-success" />
          <div class="timeline-start">367 AD</div>
          <div class="timeline-middle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="text-success h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="timeline-end timeline-box">
            New Testament Compilation
            <a href="{{ route('new-testament-timeline') }}" class="text-sm text-nowrap underline text-gray-400 block text-center">click to view timeline</a>
          </div>
        </li>
    </ul>
</div>
