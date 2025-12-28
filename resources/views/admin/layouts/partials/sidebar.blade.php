<style>
    /* DPP Color Variables */
    :root {
        --navy-900: #102a43;
        --navy-800: #243b53;
        --navy-700: #334e68;
        --sky-500: #0ea5e9;
        --sky-400: #38bdf8;
        --sky-300: #7dd3fc;
        --gray-200: #e5e7eb;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --white: #ffffff;
    }

    /* Sidebar Base Styles */
    .sidebar-container {
        width: 16rem;
        background-color: var(--navy-900);
        color: var(--white);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Logo Section */
    .sidebar-logo {
        padding: 1.5rem;
        border-bottom: 1px solid var(--navy-800);
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .logo-icon {
        height: 2.5rem;
        width: 2.5rem;
        background-color: var(--sky-500);
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logo-icon svg {
        width: 1.5rem;
        height: 1.5rem;
        color: var(--white);
    }

    .logo-title {
        font-weight: bold;
        font-size: 1.25rem;
        color: var(--white);
        line-height: 1.2;
    }

    .logo-subtitle {
        font-size: 0.875rem;
        color: var(--sky-300);
        line-height: 1.2;
    }

    /* Navigation */
    .sidebar-nav {
        flex: 1;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .nav-item {
        display: flex;
        align-items: center;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: var(--gray-200);
        border-radius: 0.5rem;
        text-decoration: none;
        transition: all 0.2s;
        margin-bottom: 0.25rem;
    }

    .nav-item:hover {
        background-color: var(--navy-700);
        color: var(--white);
    }

    .nav-item.active {
        background-color: var(--navy-700);
        color: var(--white);
    }

    .nav-icon {
        width: 1.25rem;
        height: 1.25rem;
        margin-right: 0.75rem;
        color: var(--gray-400);
    }

    .nav-item:hover .nav-icon {
        color: var(--sky-400);
    }

    .nav-item.active .nav-icon {
        color: var(--sky-400);
    }

    .active-dot {
        margin-left: auto;
        width: 0.5rem;
        height: 0.5rem;
        background-color: var(--sky-500);
        border-radius: 50%;
    }

    /* Divider */
    .nav-divider {
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 1.5rem;
        padding-bottom: 0.5rem;
    }

    .divider-text {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--gray-400);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Footer */
    .sidebar-footer {
        padding: 1.5rem;
        border-top: 1px solid var(--navy-800);
    }

    .user-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .user-details p:first-child {
        font-size: 0.875rem;
        color: var(--gray-400);
        margin-bottom: 0.25rem;
    }

    .user-details p:last-child {
        font-weight: 500;
        color: var(--white);
    }

    .logout-button {
        padding: 0.5rem;
        color: var(--gray-400);
        background: none;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .logout-button:hover {
        color: var(--sky-400);
        background-color: var(--navy-700);
    }

    .logout-button svg {
        width: 1.25rem;
        height: 1.25rem;
    }

    .copyright {
        padding-top: 1rem;
        border-top: 1px solid var(--navy-800);
        text-align: center;
    }

    .copyright p:first-child {
        font-size: 0.75rem;
        color: var(--gray-500);
    }

    .copyright p:last-child {
        font-size: 0.75rem;
        color: var(--gray-600);
        margin-top: 0.25rem;
    }
</style>
<div class="flex min-h-screen">
<aside class="sidebar-container">
    <!-- Logo / Brand -->
    <div class="sidebar-logo">
        <div class="logo-container">
            <!-- Logo/Icon -->
            <div class="logo-icon">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <h1 class="logo-title">DPP Zanzibar</h1>
                <p class="logo-subtitle">Admin Panel</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
           class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <svg class="nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            <span>Dashboard</span>
            @if(request()->routeIs('admin.dashboard'))
                <span class="active-dot"></span>
            @endif
        </a>

        <!-- Users -->
        <a href="{{ route('admin.users') }}"
           class="nav-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
            <svg class="nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
            <span>Users</span>
            @if(request()->routeIs('admin.users'))
                <span class="active-dot"></span>
            @endif
        </a>

        <!-- Achievements -->
        <a href="{{ route('admin.achievements') }}"
           class="nav-item {{ request()->routeIs('admin.achievements') ? 'active' : '' }}">
            <svg class="nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
            </svg>
            <span>Achievements</span>
            @if(request()->routeIs('admin.achievements'))
                <span class="active-dot"></span>
            @endif
        </a>

        <!-- Feedback -->
        <a href="{{ route('admin.feedback') }}"
           class="nav-item {{ request()->routeIs('admin.feedback') ? 'active' : '' }}">
            <svg class="nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
            </svg>
            <span>Feedback</span>
            @if(request()->routeIs('admin.feedback'))
                <span class="active-dot"></span>
            @endif
        </a>

        <!-- Divider -->
        <div class="nav-divider">
            <span class="divider-text">Settings</span>
        </div>
    </nav>

    <!-- Footer -->
    <div class="sidebar-footer">
        <div class="user-info">
            <div class="user-details">
                <p>Logged in as</p>
                <p>{{ auth()->user()->name }}</p>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="logout-button">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </form>
        </div>
        <div class="copyright">
            <p>&copy; {{ date('Y') }} DPP Zanzibar</p>
            <p>v1.0.0</p>
        </div>
    </div>
</aside>
</div>

