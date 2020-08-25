let colors = {
    default: 'var(--text-default-color)',
    accent: 'var(--text-accent-color)',
    'accent-light': 'var(--text-accent-light-color)',
    muted: 'var(--text-muted-color)',
    'muted-light': 'var(--text-muted-light-color)',
};

module.exports = {
    purge: [],
    theme: {
        extend: {
            colors : colors,
            backgroundColor:{
                page: 'var(--page-background-color)',
                card: 'var(--card-background-color)',
                button: 'var(--button-background-color)',
                header: 'var(--header-background-color)'
            }
        },
        boxShadow: {
            default: '0 0 5px 0 rgba(0, 0, 0, 0.08)'
        }
    },
    variants: {},
    plugins: [],
}
