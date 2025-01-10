<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>{{isset($title) ? $title : "UT Jambi"}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @yield('head')
</head>
<body class="m-0">
    <div class="antialiased bg-gray-50 min-h-screen dark:bg-gray-900">
        <nav class="bg-primary-700 border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 md:ml-52 z-40">
          <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
              <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-white border-2 border-white rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg
                  aria-hidden="true"
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                <svg
                  aria-hidden="true"
                  class="hidden w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
              </button>
              <a href="#" class="flex md:hidden items-center justify-between bg-white p-2 rounded-lg">
                <img
                  src="{{asset('images/logo_utjambi.webp')}}"
                  class="h-6"
                  alt="UT Logo"
                />
                {{-- <span class="hidden lg:flex self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UT JAMBI</span> --}}
              </a>
              <!-- <form action="#" method="GET" class="hidden md:block md:pl-2">
                <label for="topbar-search" class="sr-only">Search</label>
                <div class="relative md:w-64 lg:w-96">
                  <div
                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                  >
                    <svg
                      class="w-5 h-5 text-gray-500 dark:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    type="text"
                    name="email"
                    id="topbar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                  />
                </div>
              </form> -->
            </div>
            <div class="flex items-center lg:order-2">
              
              {{-- Notifications
              <button
                type="button"
                data-dropdown-toggle="notification-dropdown"
                class="p-2 mr-1 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
              >
                <span class="sr-only">View notifications</span>
                <!-- Bell icon -->
                <svg
                  aria-hidden="true"
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                  ></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div
                class="hidden overflow-hidden z-50 my-4 max-w-sm text-base  bg-white divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl"
                id="notification-dropdown"
              >
                <div
                  class="block py-2 px-4 text-sm font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                >
                  Notifications
                </div>
                <div>
                  <a
                    href="#"
                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                  >
                    <div class="flex-shrink-0">
                      <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Green avatar"
                      />
                      <div
                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-3 h-3 text-white"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
                          ></path>
                          <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="pl-3 w-full">
                      <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                      >
                        New message from
                        <span class="font-semibold text-gray-900 dark:text-white"
                          >Bonnie Green</span
                        >: "Hey, what's up? All set for the presentation?"
                      </div>
                      <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                      >
                        a few moments ago
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                  >
                    <div class="flex-shrink-0">
                      <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                        alt="Jese Leos avatar"
                      />
                      <div
                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-700"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-3 h-3 text-white"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="pl-3 w-full">
                      <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                      >
                        <span class="font-semibold text-gray-900 dark:text-white"
                          >Jese leos</span
                        >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                          >5 others</span
                        >
                        started following you.
                      </div>
                      <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                      >
                        10 minutes ago
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                  >
                    <div class="flex-shrink-0">
                      <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="Joseph McFall avatar"
                      />
                      <div
                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-3 h-3 text-white"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="pl-3 w-full">
                      <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                      >
                        <span class="font-semibold text-gray-900 dark:text-white"
                          >Joseph Mcfall</span
                        >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                          >141 others</span
                        >
                        love your story. See it and view more stories.
                      </div>
                      <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                      >
                        44 minutes ago
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                  >
                    <div class="flex-shrink-0">
                      <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                        alt="Roberta Casas image"
                      />
                      <div
                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-3 h-3 text-white"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="pl-3 w-full">
                      <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                      >
                        <span class="font-semibold text-gray-900 dark:text-white"
                          >Leslie Livingston</span
                        >
                        mentioned you in a comment:
                        <span
                          class="font-medium text-primary-600 dark:text-primary-500"
                          >@bonnie.green</span
                        >
                        what do you say?
                      </div>
                      <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                      >
                        1 hour ago
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                  >
                    <div class="flex-shrink-0">
                      <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                        alt="Robert image"
                      />
                      <div
                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-700"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-3 h-3 text-white"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="pl-3 w-full">
                      <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                      >
                        <span class="font-semibold text-gray-900 dark:text-white"
                          >Robert Brown</span
                        >
                        posted a new video: Glassmorphism - learn how to implement
                        the new design trend.
                      </div>
                      <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                      >
                        3 hours ago
                      </div>
                    </div>
                  </a>
                </div>
                <a
                  href="#"
                  class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-600 dark:text-white dark:hover:underline"
                >
                  <div class="inline-flex items-center">
                    <svg
                      aria-hidden="true"
                      class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                      <path
                        fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    View all
                  </div>
                </a>
              </div> --}}
              
              <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
              >
                <span class="sr-only">Open user menu</span>
                <img
                  class="w-8 h-8 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                  alt="user photo"
                />
              </button>
              <!-- Dropdown menu -->
              <div
                class="hidden z-50 my-4 w-56 text-base  bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                id="dropdown"
              >
                <div class="py-3 px-4">
                  <span
                    class="block text-sm font-semibold text-gray-900 dark:text-white"
                    >{{auth()->user()->name}}</span
                  >
                  <span
                    class="block text-sm text-gray-500 truncate dark:text-gray-800 italic"
                    >{{auth()->user()->role}}</span
                  >
                </div>
                <ul
                  class="py-1 text-gray-700 dark:text-gray-300 list-none"
                  aria-labelledby="dropdown"
                >
                  <li class="">
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                      >My profile</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                      >Account settings</a
                    >
                  </li>
                </ul>
                <ul
                  class="py-1 text-gray-700 dark:text-gray-300 list-none"
                  aria-labelledby="dropdown"
                >
                  <li class="">
                    <a
                      href="{{route('logout')}}"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Sign out</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
    
        <!-- Sidebar -->
    
        <aside
          class="fixed top-0 left-0 z-40 w-2/3 md:w-60 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700 shadow-lg"
          aria-label="Sidenav"
          id="drawer-navigation"
        >
          <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <a href="#" class="flex items-center justify-between mb-4">
              <img
                src="{{asset('images/logo_utjambi.webp')}}"
                class="mr-3 h-8"
                alt="UT Logo"
              />
              {{-- <span class="hidden lg:flex self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UT JAMBI</span> --}}
            </a>
            <!-- <form action="#" method="GET" class="md:hidden mb-2">
              <label for="sidebar-search" class="sr-only">Search</label>
              <div class="relative">
                <div
                  class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                >
                  <svg
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    ></path>
                  </svg>
                </div>
                <input
                  type="text"
                  name="search"
                  id="sidebar-search"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                  placeholder="Search"
                />
              </div>
            </form> -->
            <ul class="space-y-2 list-none">
              <li class="">
                <a
                  href="{{route('admin.dashboard')}}"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "Dashboard") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "Dashboard") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap capitalize">dashboard</span>
                  {{-- <span
                    class="inline-flex justify-center items-center px-2 text-xs font-semibold rounded-full text-yellow-800 bg-yellow-100 dark:bg-yellow-200 dark:text-yellow-800"
                  >
                    New
                  </span> --}}
                </a>
              </li>
              <li class="">
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "Postingan") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                  aria-controls="dropdown-postingan"
                  data-collapse-toggle="dropdown-postingan"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "Postingan") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap capitalize"
                    >Post</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-postingan" class="hidden py-2 space-y-2 list-none">
                  <li class="">
                    <a
                      href="{{route('admin.post.all')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >All Posts</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.post.category.all')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Categories</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
            <ul
              class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700 list-none"
            >
              <h5 class="text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Aplikasi</h5>
              <li class="">
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "LPKBJJ") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                  aria-controls="dropdown-lpkbjj"
                  data-collapse-toggle="dropdown-lpkbjj"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "LPKBJJ") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                fill="currentColor"><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap capitalize"
                    >LPKBJJ</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-lpkbjj" class="hidden py-2 space-y-2 list-none">
                  <li class="">
                    <a
                      href="{{route('admin.lpkbjj.osmb_pkbjj')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >OSMB-PKBJJ</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.lpkbjj.wt_ku')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >WT-KU</a
                    >
                  </li>
                </ul>
              </li>
              <li class="">
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "Tutorial") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                  aria-controls="dropdown-tutorial"
                  data-collapse-toggle="dropdown-tutorial"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "Tutorial") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                fill="currentColor"><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap capitalize"
                    >Tutorial</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-tutorial" class="hidden py-2 space-y-2 list-none">
                  <li class="">
                    <a
                      href="{{route('admin.ttm.penjadwalan_tutorial')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Penjadwalan Tutorial</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.ttm.penjadwalan_kelas')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Penjadwalan Kelas</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.ttm.cek_jadwal_tutorial')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Cek Jadwal Tutorial</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.ttm.data_tutor')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Data Master</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li class="">
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "Numpang Ujian") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                  aria-controls="dropdown-numpang-ujian"
                  data-collapse-toggle="dropdown-numpang-ujian"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "Numpang Ujian") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                fill="currentColor"><path d="M403.8 34.4c12-5 25.7-2.2 34.9 6.9l64 64c6 6 9.4 14.1 9.4 22.6s-3.4 16.6-9.4 22.6l-64 64c-9.2 9.2-22.9 11.9-34.9 6.9s-19.8-16.6-19.8-29.6V160H352c-10.1 0-19.6 4.7-25.6 12.8L284 229.3 244 176l31.2-41.6C293.3 110.2 321.8 96 352 96h32V64c0-12.9 7.8-24.6 19.8-29.6zM164 282.7L204 336l-31.2 41.6C154.7 401.8 126.2 416 96 416H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96c10.1 0 19.6-4.7 25.6-12.8L164 282.7zm274.6 188c-9.2 9.2-22.9 11.9-34.9 6.9s-19.8-16.6-19.8-29.6V416H352c-30.2 0-58.7-14.2-76.8-38.4L121.6 172.8c-6-8.1-15.5-12.8-25.6-12.8H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96c30.2 0 58.7 14.2 76.8 38.4L326.4 339.2c6 8.1 15.5 12.8 25.6 12.8h32V320c0-12.9 7.8-24.6 19.8-29.6s25.7-2.2 34.9 6.9l64 64c6 6 9.4 14.1 9.4 22.6s-3.4 16.6-9.4 22.6l-64 64z"/></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap capitalize"
                    >Numpang Ujian</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-numpang-ujian" class="hidden py-2 space-y-2 list-none">
                  <li class="">
                    <a
                      href="{{route('admin.numpang_ujian.data_nu')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Data NU</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.numpang_ujian.surat_pengantar')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Surat Pengantar</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.numpang_ujian.wilayah')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Data Master</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li class="">
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-sm font-medium rounded-lg transition duration-75 group @if(isset($active) && $active == "Wisuda") text-primary-700 bg-primary-100 @else text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 @endif"
                  aria-controls="dropdown-yudisium"
                  data-collapse-toggle="dropdown-yudisium"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-5 h-4 transition duration-75 @if(isset($active) && $active == "Wisuda") text-primary-700 bg-primary-100 @else text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white @endif"
                fill="currentColor"><path d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/></svg>
                  
                  <span class="flex-1 ml-3 text-left whitespace-nowrap capitalize"
                    >Wisuda</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-yudisium" class="hidden py-2 space-y-2 list-none">
                  <li class="">
                    <a
                      href="{{route('admin.wisuda.pendaftaran')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Pendaftaran Wisuda</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="{{route('admin.wisuda.kehadiran')}}"
                      class="flex items-center p-2 pl-11 w-full text-sm font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Kehadiran Wisuda</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
            <ul
              class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700 list-none"
            >
              <h5 class="text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Lainnya</h5>
              <li class="">
                <a
                  href="{{route('admin.setting')}}"
                  class="flex items-center p-2 text-sm font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                >
                <svg
                aria-hidden="true"
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
                  <span class="ml-3">Settings</span>
                </a>
              </li>
            </ul>
          </div>
          <div
            class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20"
          >
            
            <a
              href="{{route('homepage')}}"
              class="inline-flex justify-center items-center p-2 text-sm w-full bg-gray-300 dark:bg-gray-800 hover:bg-gray-600 hover:text-gray-100 rounded-lg cursor-pointer"
            >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-3.5 h-3.5 me-2" fill="currentColor"><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z"/></svg>
            Homepage
            </a>
          </div>
        </aside>
    
        <main class="p-4 md:ml-60 h-auto pt-20">

          @if(Session::has('success'))
            <div id="toast-success" class="z-50 fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
              <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                  </svg>
                  <span class="sr-only">Check icon</span>
              </div>
              <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
              </button>
          </div>
          @elseif(Session::has('alert'))
          <div id="toast-warning" class="fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
                </svg>
                <span class="sr-only">Warning icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ Session::get('alert') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
          @elseif(Session::has('error'))
          <div id="toast-danger" class="fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ Session::get('error') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
          @endif

          <div class="max-w-screen-2xl mx-auto flex flex-col gap-5">
            
            @yield('content')
          </div>
        </main>
      </div>
</body>
@yield('script')
</html>