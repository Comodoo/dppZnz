<style>
    /* DPP Color Variables */
    :root {
        --navy-700: #334e68;
        --navy-800: #243b53;
        --navy-900: #102a43;
        --sky-50: #f0f9ff;
        --sky-100: #e0f2fe;
        --sky-500: #0ea5e9;
        --sky-600: #0284c7;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-300: #d1d5db;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-700: #374151;
        --gray-800: #1f2937;
        --white: #ffffff;
        --red-500: #ef4444;
    }

    /* Header Base Styles */
    .header-container {
        background-color: var(--white);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        border-bottom: 1px solid var(--gray-200);
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        top: 0;
        left: 0;
        /* avoid hardcoding sidebar width */
        width: 100%;
    }

    /* Left Section */
    .header-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    /* Mobile Menu Toggle */
    .mobile-toggle {
        display: none;
        color: var(--navy-700);
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.2s;
    }

    .mobile-toggle:hover {
        color: var(--sky-500);
    }

    .mobile-toggle svg {
        width: 1.5rem;
        height: 1.5rem;
    }

    /* Breadcrumb Navigation */
    .breadcrumb {
        display: none;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.875rem;
    }

    .breadcrumb-home {
        color: var(--gray-500);
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-home:hover {
        color: var(--sky-500);
    }

    .breadcrumb-home svg {
        width: 1rem;
        height: 1rem;
    }

    .breadcrumb-divider {
        color: var(--gray-400);
    }

    .breadcrumb-current {
        color: var(--navy-700);
        font-weight: 500;
        text-transform: capitalize;
    }

    /* Welcome Message (Mobile) */
    .mobile-welcome {
        display: none;
        color: var(--navy-700);
    }

    .mobile-welcome span {
        font-weight: 600;
    }

    /* Page Title for Mobile */
    .mobile-title {
        display: none;
    }

    .mobile-title h1 {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--navy-800);
    }

    /* Right Section */
    .header-right {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    /* Search Button */
    .search-button {
        display: none;
        align-items: center;
        padding: 0.5rem;
        color: var(--gray-500);
        background: none;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .search-button:hover {
        color: var(--sky-500);
        background-color: var(--sky-50);
    }

    .search-button svg {
        width: 1.25rem;
        height: 1.25rem;
    }

    /* Notifications */
    .notifications-container {
        position: relative;
    }

    .notification-button {
        position: relative;
        padding: 0.5rem;
        color: var(--gray-500);
        background: none;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .notification-button:hover {
        color: var(--sky-500);
        background-color: var(--sky-50);
    }

    .notification-button svg {
        width: 1.25rem;
        height: 1.25rem;
    }

    .notification-badge {
        position: absolute;
        top: -0.25rem;
        right: -0.25rem;
        background-color: var(--red-500);
        color: var(--white);
        font-size: 0.75rem;
        border-radius: 50%;
        width: 1.25rem;
        height: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    /* Notification Dropdown */
    .notification-dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        margin-top: 0.5rem;
        width: 20rem;
        background-color: var(--white);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 0.5rem;
        border: 1px solid var(--gray-200);
        z-index: 30;
        animation: fadeIn 0.2s ease-out;
    }

    .notification-header {
        padding: 1rem;
        border-bottom: 1px solid var(--gray-100);
    }

    .notification-header h3 {
        font-weight: 600;
        color: var(--navy-800);
        margin-bottom: 0.25rem;
    }

    .notification-header p {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .notification-list {
        max-height: 24rem;
        overflow-y: auto;
    }

    .notification-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid var(--gray-100);
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .notification-item:hover {
        background-color: var(--gray-50);
    }

    .notification-icon {
        flex-shrink: 0;
        width: 2rem;
        height: 2rem;
        background-color: var(--sky-100);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 0.75rem;
    }

    .notification-icon svg {
        width: 1rem;
        height: 1rem;
        color: var(--sky-500);
    }

    .notification-content p:first-child {
        font-size: 0.875rem;
        font-weight: 500;
        color: var(--gray-900);
        margin-bottom: 0.25rem;
    }

    .notification-content p:last-child {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .notification-footer {
        padding: 0.75rem;
        border-top: 1px solid var(--gray-100);
        text-align: center;
    }

    .notification-footer a {
        display: block;
        font-size: 0.875rem;
        color: var(--sky-600);
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s;
    }

    .notification-footer a:hover {
        color: var(--sky-700);
    }

    /* User Profile */
    .user-container {
        position: relative;
    }

    .user-button {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: none;
        border: none;
        cursor: pointer;
    }

    .user-avatar {
        width: 2.5rem;
        height: 2.5rem;
        background: linear-gradient(135deg, var(--sky-500), var(--navy-700));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-weight: 600;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .user-info {
        display: none;
        text-align: left;
    }

    .user-name {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--navy-800);
    }

    .user-role {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .user-chevron {
        display: none;
        width: 1rem;
        height: 1rem;
        color: var(--gray-500);
    }

    /* User Dropdown Menu */
    .user-dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        margin-top: 0.5rem;
        width: 12rem;
        background-color: var(--white);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 0.5rem;
        border: 1px solid var(--gray-200);
        z-index: 30;
        animation: fadeIn 0.2s ease-out;
    }

    .user-dropdown-header {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--gray-100);
    }

    .user-dropdown-header p:first-child {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--navy-800);
        margin-bottom: 0.25rem;
    }

    .user-dropdown-header p:last-child {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
        color: var(--gray-700);
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .dropdown-item:hover {
        background-color: var(--gray-50);
    }

    .dropdown-item svg {
        width: 1rem;
        height: 1rem;
        margin-right: 0.75rem;
        color: var(--gray-400);
    }

    .dropdown-divider {
        height: 1px;
        background-color: var(--gray-100);
        margin: 0.25rem 0;
    }

    .logout-form {
        width: 100%;
    }

    .logout-button {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
        color: var(--red-500);
        background: none;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .logout-button:hover {
        background-color: rgba(239, 68, 68, 0.1);
    }

    .logout-button svg {
        width: 1rem;
        height: 1rem;
        margin-right: 0.75rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .mobile-toggle {
            display: block;
        }

        .mobile-welcome {
            display: block;
        }

        .mobile-title {
            display: block;
        }
    }

    @media (min-width: 768px) {
        .breadcrumb {
            display: flex;
        }

        .search-button {
            display: flex;
        }
    }

    @media (min-width: 1024px) {
        .user-info {
            display: block;
        }

        .user-chevron {
            display: block;
        }
    }

    /* Animation */
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
</style>

<header class="header-container">
    <!-- Left Section -->
    <div class="header-left">
        <!-- Mobile Menu Toggle -->
        <button id="sidebarToggle" class="mobile-toggle">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb">
            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-home">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
            </a>
            <span class="breadcrumb-divider">/</span>
            <span class="breadcrumb-current">
                @yield('page-title', 'Dashboard')
            </span>
        </div>

        <!-- Welcome Message (Mobile) -->
        <div class="mobile-welcome">
            <span>Hi, {{ Str::limit(auth()->user()->name, 10) }}</span>
        </div>
    </div>

    <!-- Page Title for Mobile -->
    <div class="mobile-title">
        <h1>@yield('page-title', 'Dashboard')</h1>
    </div>

    <!-- Right Section -->
    <div class="header-right">
        <!-- Search Button -->
        <button class="search-button">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>

        <!-- Notifications -->
        <div class="notifications-container">
            <button id="notificationButton" class="notification-button">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
                <span class="notification-badge">3</span>
            </button>

            <!-- Notification Dropdown -->
            <div id="notificationDropdown" class="notification-dropdown">
                <div class="notification-header">
                    <h3>Notifications</h3>
                    <p>3 unread messages</p>
                </div>
                <div class="notification-list">
                    <a href="#" class="notification-item">
                        <div class="notification-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="notification-content">
                            <p>New feedback received</p>
                            <p>2 minutes ago</p>
                        </div>
                    </a>
                </div>
                <div class="notification-footer">
                    <a href="#">View all notifications</a>
                </div>
            </div>
        </div>

        <!-- User Profile -->
        <div class="user-container">
            <button id="userMenuButton" class="user-button">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="user-info">
                    <p class="user-name">{{ auth()->user()->name }}</p>
                    <p class="user-role">Administrator</p>
                </div>
                <svg class="user-chevron" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- User Dropdown Menu -->
            <div id="userDropdown" class="user-dropdown">
                <div class="user-dropdown-header">
                    <p>{{ auth()->user()->name }}</p>
                    <p>{{ auth()->user()->email }}</p>
                </div>

                <a href="#" class="dropdown-item">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    My Profile
                </a>

                <a href="#" class="dropdown-item">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Settings
                </a>

                <div class="dropdown-divider"></div>

                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-button">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile sidebar toggle
        const sidebarToggle = document.getElementById('sidebarToggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => {
                const sidebar = document.querySelector('aside');
                if (sidebar) sidebar.classList.toggle('hidden');
            });
        }

        // Notification dropdown
        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');

        if (notificationButton && notificationDropdown) {
            notificationButton.addEventListener('click', (e) => {
                e.stopPropagation();
                notificationDropdown.style.display = notificationDropdown.style.display === 'block' ?
                    'none' : 'block';

                // Hide user dropdown if open
                const userDropdown = document.getElementById('userDropdown');
                if (userDropdown) {
                    userDropdown.style.display = 'none';
                }
            });
        }

        // User dropdown
        const userMenuButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        if (userMenuButton && userDropdown) {
            userMenuButton.addEventListener('click', (e) => {
                e.stopPropagation();
                userDropdown.style.display = userDropdown.style.display === 'block' ? 'none' : 'block';

                // Hide notification dropdown if open
                if (notificationDropdown) {
                    notificationDropdown.style.display = 'none';
                }
            });
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', () => {
            if (notificationDropdown) {
                notificationDropdown.style.display = 'none';
            }
            if (userDropdown) {
                userDropdown.style.display = 'none';
            }
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
