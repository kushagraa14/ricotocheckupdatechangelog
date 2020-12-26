<x-app-layout>
    <div class="h-screen flex overflow-hidden bg-white">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="lg:hidden">
            <div class="fixed inset-0 flex z-40">
                <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: x -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-shrink-0 flex items-center px-4">
                        <img class="h-8 w-auto"
                             src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg"
                             alt="Workflow">
                    </div>
                    <div class="mt-5 flex-1 h-0 overflow-y-auto">
                        <nav class="px-2">
                            <div class="space-y-1">
                                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:text-gray-900 hover:bg-gray-50" -->
                                <a href="#"
                                   class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md"
                                   aria-current="page">
                                    <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                                    <!-- Heroicon name: home -->
                                    <svg class="text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    Home
                                </a>

                                <a href="#"
                                   class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md">
                                    <!-- Heroicon name: view-list -->
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                    </svg>
                                    My tasks
                                </a>

                                <a href="#"
                                   class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md">
                                    <!-- Heroicon name: clock -->
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Recent
                                </a>
                            </div>
                            <div class="mt-8">
                                <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                    id="teams-headline">
                                    Teams
                                </h3>
                                <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full"
                                              aria-hidden="true"></span>
                                        <span class="truncate">
                    Engineering
                  </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full"
                                              aria-hidden="true"></span>
                                        <span class="truncate">
                    Human Resources
                  </span>
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full"
                                              aria-hidden="true"></span>
                                        <span class="truncate">
                    Customer Success
                  </span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>
        <x-app-sidebar/>
        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64 border-r border-gray-200 pb-4 bg-gray-100">
                <x-left-navigation></x-left-navigation>
            </div>
        </div>
        <!-- Main column -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Search header -->
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
                <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
                <button
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: menu-alt-1 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </button>
                <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex-1 flex">
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search_field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <!-- Heroicon name: search -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input id="search_field" name="search_field"
                                       class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm"
                                       placeholder="Search" type="search">
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center">
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button
                                    class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                    id="user-menu" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                </button>
                            </div>
                            <!--
                              Profile dropdown panel, show/hide based on dropdown state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">View profile</a>
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">Settings</a>
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">Notifications</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">Get desktop app</a>
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">Support</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <x-app-navigation/>
                <!-- Pinned projects -->
                <div class="px-4 mt-6 sm:px-6 lg:px-8">
                    <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Pinned Projects</h2>
                    <ul class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4 mt-3">
                        <li class="relative col-span-1 flex shadow-sm rounded-md">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                                GA
                            </div>
                            <div
                                class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                                        GraphQL API
                                    </a>
                                    <p class="text-gray-500">12 Members</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button id="pinned-project-options-menu-0" aria-haspopup="true"
                                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: dots-vertical -->
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                        </svg>
                                    </button>
                                    <!--
                                      Dropdown panel, show/hide based on dropdown state.

                                      Entering: "transition ease-out duration-100"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                      Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"

                                    <div class="z-10 mx-3 origin-top-right absolute right-10 top-3 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-0">
                                        <div class="py-1" role="none">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View</a>
                                        </div>
                                        <div class="py-1" role="none">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Removed from pinned</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </li>

                        <!-- More project cards... -->
                    </ul>
                </div>

                <!-- Projects list (only on smallest breakpoint) -->
                <div class="mt-10 sm:hidden">
                    <div class="px-4 sm:px-6">
                        <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Projects</h2>
                    </div>
                    <ul class="mt-3 border-t border-gray-200 divide-y divide-gray-100">
                        <li>
                            <a href="#"
                               class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                                  <span class="flex items-center truncate space-x-3">
                                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600"
                                          aria-hidden="true"></span>
                                    <span class="font-medium truncate text-sm leading-6">
                                      GraphQL API
                                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                                    </span>
                                  </span>
                                <!-- Heroicon name: chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>

                        <!-- More project rows... -->
                    </ul>
                </div>

                <!-- Projects table (small breakpoint and up) -->
                <div class="hidden mt-8 sm:block">
                    <div class="align-middle inline-block min-w-full border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr class="border-t border-gray-200">
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <span class="lg:pl-2">Project</span>
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Members
                                </th>
                                <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Last updated
                                </th>
                                <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                    <div class="flex items-center space-x-3 lg:pl-2">
                                        <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                             aria-hidden="true"></div>
                                        <a href="#" class="truncate hover:text-gray-600">
                                          <span>
                                            GraphQL API
                                            <span class="text-gray-500 font-normal">in Engineering</span>
                                          </span>
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                    <div class="flex items-center space-x-2">
                                        <div class="flex flex-shrink-0 -space-x-1">
                                            <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                 src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">

                                            <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">

                                            <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">

                                            <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                 src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">
                                        </div>

                                        <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                    March 17, 2020
                                </td>
                                <td class="pr-6">
                                    <div class="relative flex justify-end items-center">
                                        <button id="project-options-menu-0" aria-haspopup="true" type="button"
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: dots-vertical -->
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                            </svg>
                                        </button>
                                        <!--
                                          Dropdown panel, show/hide based on dropdown state.

                                          Entering: "transition ease-out duration-100"
                                            From: "transform opacity-0 scale-95"
                                            To: "transform opacity-100 scale-100"
                                          Leaving: "transition ease-in duration-75"
                                            From: "transform opacity-100 scale-100"
                                            To: "transform opacity-0 scale-95"
                                        -->
                                        {{--<div class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-0">
                                            <div class="py-1" role="none">
                                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                                    <!-- Heroicon name: pencil-alt -->
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                                    <!-- Heroicon name: duplicate -->
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
                                                        <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
                                                    </svg>
                                                    Duplicate
                                                </a>
                                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                                    <!-- Heroicon name: user-add -->
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                                    </svg>
                                                    Share
                                                </a>
                                            </div>
                                            <div class="py-1" role="none">
                                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                                    <!-- Heroicon name: trash -->
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>--}}
                                    </div>
                                </td>
                            </tr>

                            <!-- More project rows... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-app-layout>
