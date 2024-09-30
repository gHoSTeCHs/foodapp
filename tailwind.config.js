/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: '1rem',
                screens: {
                    '2xl': '1536px',
                    xl: '1280px',
                    lg: '1024px',
                    md: '768px',
                    sm: '640px',
                    xs: '480px',
                },
            },
            colors: {
                background: 'var(--background)',
                'text-primary': 'var(--text-primary)',
                'text-secondary': 'var(--text-secondary)',
                'text-error': 'var(--text-error)',
            }
        },
    },
    plugins: [],
}

