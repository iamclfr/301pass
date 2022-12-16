<div class="sticky top-8 py-12 pl-8 bg-gray-100 h-[45rem] w-52 rounded-3xl dark:bg-slate-800">
    <div class="relative flex justify-between items-start flex-col w-full h-full ">
        <div class="w-full">
            <div class="flex justify-center items-center pr-8">
                <img src="https://lh3.googleusercontent.com/ogw/AOh-ky0y3QdaXsNiqTNO9n3odTHLo2NlyqP10B2_LFrH=s50-c-mo" alt="Logo 301Pass" class="rounded-full">
            </div>
            <nav class="w-full mt-8">
                <ul>
                    <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 @if(request()->routeIs('dashboard')) bg-white dark:bg-gray-900 @endif rounded-tl-full rounded-bl-full dark:text-white">
                        <a href="{{ route('dashboard') }}" class="flex justify-start items-center py-2 px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 rounded-tl-full rounded-bl-full dark:text-white">
                        <a href="#" class="flex justify-start items-center py-2 px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            Password
                        </a>
                    </li>
                    <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 rounded-tl-full rounded-bl-full dark:text-white">
                        <a href="#" class="flex justify-start items-center py-2 px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                            </svg>
                            NoteBook
                        </a>
                    </li>
                    <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 rounded-tl-full rounded-bl-full dark:text-white">
                        <a href="#" class="flex justify-start items-center py-2 px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            Medias
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="w-full">
            <ul>
                <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 @if(request()->routeIs('profile.edit')) bg-white dark:bg-gray-900 @endif rounded-tl-full rounded-bl-full dark:text-white">
                    <a href="{{ route('profile.edit') }}" class="flex justify-start items-center py-2 px-4 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Account
                    </a>
                </li>
                <li class="flex justify-start items-center text-lg my-2 hover:bg-white dark:hover:bg-gray-900 rounded-tl-full rounded-bl-full dark:text-white">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" class="flex py-2 px-4 w-full">
                        @csrf
                        <a href="{{ route('logout') }}" class="flex justify-start items-center w-full" onclick="event.preventDefault();this.closest('form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
