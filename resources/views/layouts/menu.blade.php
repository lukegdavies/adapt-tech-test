<nav class="flex-col flex-1 flex">
    <!-- Main navigation container with flexible column layout -->
    <ul role="list" class="gap-7 flex-col flex-1 flex list-style-none m-0 p-0">
        <!-- List of major navigation sections, styled without list markers and padding for a clean layout -->
        <li>
            <!-- Sub-navigation container. Each sub-navigation group is also a flex container. -->
            <ul role="list" class="gap-3 flex-col flex-1 flex list-style-none m-0 p-0 ml-[-0.5rem] mr-[-0.5rem]">
                <li>
                     <!-- Dashboard navigation link. Utilizes a Blade component for consistency and maintainability. -->
                    <x-nav-link class="flex leading-6 font-semibold text-sm gap-3" :href="route('dashboard')" :active="request()->routeIs('dashboard')" >
                         <!-- SVG icon for the dashboard link. 'aria-hidden' is set to true to exclude it from screen reader contexts, ensuring the icon is decorative only. -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path></svg>
                        Dashboard
                    </x-nav-link>
                </li>
            <li>
             <!-- Patients navigation link, similar setup to Dashboard. Check active state to highlight current navigation context. -->
            <x-nav-link class="flex leading-6 font-semibold text-sm gap-3" :href="route('patients.index')" :active="request()->routeIs('patients.index')">
                 <!-- SVG icon for the Patients link. -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path></svg>

                Patients
            </x-nav-link>
        </li>
            </ul>
        </li>
    </ul>
</nav>