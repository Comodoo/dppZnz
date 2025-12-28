<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'DPP Zanzibar Admin' }}</title>
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configure DPP Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            900: '#102a43',
                            800: '#243b53',
                            700: '#334e68',
                        },
                        sky: {
                            500: '#0ea5e9',
                            400: '#38bdf8',
                            300: '#7dd3fc',
                        }
                    }
                }
            }
        }
    </script>


    @livewireStyles

    <!-- Custom CSS for Layout -->
    <style>
        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }

        /* Active link styles */
        .nav-item.active {
            position: relative;
        }

        .nav-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: #38bdf8;
            border-radius: 0 4px 4px 0;
        }

        /* Mobile sidebar animation */
        .sidebar-mobile {
            transition: transform 0.3s ease-in-out;
        }

        /* Notification badge animation */
        @keyframes ping {
            75%, 100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        .animate-ping-slow {
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        /* Dropdown animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-animation {
            animation: fadeIn 0.2s ease-out;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-navy-900 text-white min-h-screen shadow-xl flex-shrink-0 flex flex-col hidden md:flex">
        <!-- Logo / Brand -->
        <div class="p-6 border-b border-navy-800">
            <div class="flex items-center space-x-3">
                <!-- Logo/Icon -->
                <div class="h-10 w-10 bg-sky-500 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="font-bold text-xl text-white">DPP Zanzibar</h1>
                    <p class="text-sm text-sky-300">Admin Panel</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-1">
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}"
               class="nav-item flex items-center px-4 py-3 text-gray-200 hover:bg-navy-700 hover:text-white transition-all duration-200 rounded-lg group {{ request()->routeIs('admin.dashboard') ? 'bg-navy-700 text-white' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-sky-400 {{ request()->routeIs('admin.dashboard') ? 'text-sky-400' : '' }}"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                <span>Dashboard</span>
                @if(request()->routeIs('admin.dashboard'))
                    <span class="ml-auto w-2 h-2 bg-sky-500 rounded-full"></span>
                @endif
            </a>

            <!-- Users -->
            <a href="{{ route('admin.users') }}"
               class="nav-item flex items-center px-4 py-3 text-gray-200 hover:bg-navy-700 hover:text-white transition-all duration-200 rounded-lg group {{ request()->routeIs('admin.users') ? 'bg-navy-700 text-white' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-sky-400 {{ request()->routeIs('admin.users') ? 'text-sky-400' : '' }}"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                </svg>
                <span>Users</span>
                @if(request()->routeIs('admin.users'))
                    <span class="ml-auto w-2 h-2 bg-sky-500 rounded-full"></span>
                @endif
            </a>

            <!-- Achievements -->
            <a href="{{ route('admin.achievements') }}"
               class="nav-item flex items-center px-4 py-3 text-gray-200 hover:bg-navy-700 hover:text-white transition-all duration-200 rounded-lg group {{ request()->routeIs('admin.achievements') ? 'bg-navy-700 text-white' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-sky-400 {{ request()->routeIs('admin.achievements') ? 'text-sky-400' : '' }}"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                </svg>
                <span>Achievements</span>
                @if(request()->routeIs('admin.achievements'))
                    <span class="ml-auto w-2 h-2 bg-sky-500 rounded-full"></span>
                @endif
            </a>

            <!-- Feedback -->
            <a href="{{ route('admin.feedback') }}"
               class="nav-item flex items-center px-4 py-3 text-gray-200 hover:bg-navy-700 hover:text-white transition-all duration-200 rounded-lg group {{ request()->routeIs('admin.feedback') ? 'bg-navy-700 text-white' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-sky-400 {{ request()->routeIs('admin.feedback') ? 'text-sky-400' : '' }}"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                </svg>
                <span>Feedback</span>
                @if(request()->routeIs('admin.feedback'))
                    <span class="ml-auto w-2 h-2 bg-sky-500 rounded-full"></span>
                @endif
            </a>

            <!-- Divider -->
            <div class="px-4 pt-6 pb-2">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Settings</span>
            </div>
        </nav>

        <!-- Footer -->
        <div class="p-6 border-t border-navy-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-400">Logged in as</p>
                    <p class="font-medium text-white">{{ auth()->user()->name }}</p>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                            class="p-2 text-gray-400 hover:text-sky-400 hover:bg-navy-700 rounded-lg transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="mt-4 pt-4 border-t border-navy-800 text-center">
                <p class="text-xs text-gray-500">&copy; {{ date('Y') }} DPP Zanzibar</p>
                <p class="text-xs text-gray-600 mt-1">v1.0.0</p>
            </div>
        </div>
    </aside>

    <!-- Main Section -->
    <div class="flex-1 flex flex-col min-h-screen">

        <!-- Header -->
        <header class="bg-white shadow-lg border-b border-gray-200 px-6 py-4 flex justify-between items-center sticky top-0 z-10">
            <!-- Left: Mobile toggle + Welcome -->
            <div class="flex items-center space-x-4">
                <!-- Mobile Menu Toggle -->
                <button id="sidebarToggle" class="md:hidden text-navy-700 hover:text-sky-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Welcome message -->
                <div class="text-gray-700 font-semibold text-lg hidden md:block">
                    Welcome, {{ auth()->user()->name }}
                </div>

                <!-- Mobile welcome -->
                <div class="md:hidden text-navy-700">
                    <span class="font-semibold">Hi, {{ Str::limit(auth()->user()->name, 10) }}</span>
                </div>
            </div>

            <!-- Right: Actions -->
            <div class="flex items-center space-x-6">
                <!-- Search Button -->
                <button class="hidden md:flex items-center p-2 text-gray-500 hover:text-sky-500 hover:bg-sky-50 rounded-lg transition">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- Notifications -->
                <div class="relative">
                    <button id="notificationButton" class="p-2 text-gray-500 hover:text-sky-500 hover:bg-sky-50 rounded-lg transition focus:outline-none">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <!-- Notification Badge -->
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center animate-ping-slow">
                            3
                        </span>
                    </button>

                    <!-- Notification Dropdown -->
                    <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-80 bg-white shadow-xl rounded-lg border border-gray-200 z-30 dropdown-animation">
                        <div class="p-4 border-b border-gray-100">
                            <h3 class="font-semibold text-navy-800">Notifications</h3>
                            <p class="text-xs text-gray-500">3 unread messages</p>
                        </div>
                        <div class="max-h-96 overflow-y-auto">
                            <!-- Notification items -->
                            <a href="#" class="flex items-center p-4 hover:bg-gray-50 border-b border-gray-100">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 bg-sky-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">New feedback received</p>
                                    <p class="text-xs text-gray-500">2 minutes ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="p-3 border-t border-gray-100">
                            <a href="#" class="block text-center text-sm text-sky-600 hover:text-sky-700 font-medium">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="relative">
                    <button id="userMenuButton" class="flex items-center space-x-3 focus:outline-none">
                        <!-- User Avatar -->
                        <div class="h-10 w-10 bg-gradient-to-r from-sky-500 to-navy-600 rounded-full flex items-center justify-center text-white font-semibold shadow">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <!-- User Info (Desktop only) -->
                        <div class="hidden lg:block text-left">
                            <p class="text-sm font-semibold text-navy-800">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>

                        <!-- Chevron Icon -->
                        <svg class="hidden lg:block w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- User Dropdown Menu -->
                    <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-xl rounded-lg border border-gray-200 z-30 py-1 dropdown-animation">
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="text-sm font-semibold text-navy-800">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                        </div>

                        <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                            <svg class="w-4 h-4 mr-3 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>

                        <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                            <svg class="w-4 h-4 mr-3 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>

                        <div class="border-t border-gray-100"></div>

                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="w-full flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-auto bg-gray-50 flex justify-center">
            <div class="w-full max-w-4xl">
                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 text-gray-500 text-sm p-4 flex justify-center items-center">
            &copy; {{ date('Y') }} DPP Zanzibar Admin Panel. All rights reserved.
        </footer>
    </div>

    @livewireScripts

    <!-- JavaScript for Mobile Sidebar and Dropdowns -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile sidebar toggle
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', () => {
                    sidebar.classList.toggle('hidden');
                    sidebar.classList.toggle('flex');
                    sidebar.classList.toggle('fixed');
                    sidebar.classList.toggle('inset-0');
                    sidebar.classList.toggle('z-50');
                });

                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(event) {
                    if (window.innerWidth < 768) {
                        if (sidebar.classList.contains('fixed') &&
                            !sidebar.contains(event.target) &&
                            !sidebarToggle.contains(event.target)) {
                            sidebar.classList.add('hidden');
                            sidebar.classList.remove('flex', 'fixed', 'inset-0', 'z-50');
                        }
                    }
                });
            }

            // Notification dropdown
            const notificationButton = document.getElementById('notificationButton');
            const notificationDropdown = document.getElementById('notificationDropdown');

            if (notificationButton && notificationDropdown) {
                notificationButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    notificationDropdown.classList.toggle('hidden');
                    userDropdown.classList.add('hidden');
                });
            }

            // User dropdown
            const userMenuButton = document.getElementById('userMenuButton');
            const userDropdown = document.getElementById('userDropdown');

            if (userMenuButton && userDropdown) {
                userMenuButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    userDropdown.classList.toggle('hidden');
                    notificationDropdown.classList.add('hidden');
                });
            }

            // Close dropdowns when clicking outside
            document.addEventListener('click', () => {
                if (notificationDropdown) notificationDropdown.classList.add('hidden');
                if (userDropdown) userDropdown.classList.add('hidden');
            });

            // Prevent dropdowns from closing when clicking inside them
            if (notificationDropdown) {
                notificationDropdown.addEventListener('click', (e) => e.stopPropagation());
            }
            if (userDropdown) {
                userDropdown.addEventListener('click', (e) => e.stopPropagation());
            }
        });
    </script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
