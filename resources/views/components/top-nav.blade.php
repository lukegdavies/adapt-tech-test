<!-- Sticky header with dynamic padding and gap for different screen sizes using Tailwind CSS. This bar appears fixed at the top of the viewport. -->
    <div class="lg:pl-8 lg:pr-8 pl-6 pr-6 sm:gap-6 bg-white  border-[1px] items-center shrink-0 h-16 flex z-40 top-0 sticky justify-end">

        <!-- Burger menu button for smaller screens, hidden on larger screens. Clicking this button toggles the visibility of the mobile menu. -->
        <button type="button" class="lg:hidden p-[0.625rem] mr-3" @click="showingMenu = !showingMenu">
             <!-- Accessibility hidden text to describe the button's function for screen readers. -->
            <span class="absolute w-[1px] h-[1px] p-0 m-[-1px] overflow-hidden whitespace-nowrap border-0">Open sidebar</span>
             <!-- Icon for the burger menu using SVG. -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
        </button>

            <div class="flex">
                <!-- Check if a user is authenticated and display user-specific options -->
                @auth
                <!-- User settings dropdown menu -->
                <div class="sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <!-- Trigger for dropdown, showing user info and a dropdown arrow -->
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400  bg-adapt-bg hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ $user }}</div> <!-- Displaying the current user's name -->
                                <div class="ms-1">
                                     <!-- Dropdown arrow icon -->
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <!-- Dropdown content with links and forms -->
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }} <!-- Link to user profile page -->
                            </x-dropdown-link>
                            <!-- Logout form that submits on link click -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth
            </div>
        </div>