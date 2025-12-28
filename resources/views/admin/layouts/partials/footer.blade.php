<style>
    /* DPP Color Variables */
    :root {
        --white: #ffffff;
        --gray-200: #e5e7eb;
        --gray-500: #6b7280;
    }

    /* Footer Base Styles */
    .footer-container {
        background-color: var(--white);
        border-top: 1px solid var(--gray-200);
        color: var(--gray-500);
        font-size: 0.875rem;
        padding: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
</style>

<footer class="footer-container">
    &copy; {{ date('Y') }} DPP Zanzibar Admin Panel. All rights reserved.
</footer>
