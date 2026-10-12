<script lang="ts">
    let {
        class: className = '',
        ...rest
    }: {
        class?: string;
        [key: string]: unknown;
    } = $props();
</script>

<svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 40 42"
    class={className}
    {...rest}
>
    <circle
        cx="20"
        cy="21"
        r="18"
        fill="none"
        stroke="currentColor"
        stroke-width="2.5"
    />
    <defs>
        <mask id="econotracker-coin-mask">
            <rect width="40" height="42" fill="white" />
            <g
                fill="none"
                stroke="black"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path
                    d="M23 18.4C23 17.2 21.7 16.6 20 16.6C18.3 16.6 17 17.3 17 18.7C17 20.2 18.6 20.5 20 21C21.4 21.5 23 21.8 23 23.3C23 24.7 21.7 25.4 20 25.4C18.3 25.4 17 24.8 17 23.6"
                />
                <path d="M20 14.9V27.1" stroke-width="1.3" />
            </g>
        </mask>
    </defs>
    <path fill="currentColor" d="M20 5 23 10.2H17Z" />
    <path
        d="M32.5 21H35M5 21H7.5M20 33.5V36"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
    />
    <circle
        cx="20"
        cy="21"
        r="8.5"
        fill="currentColor"
        mask="url(#econotracker-coin-mask)"
    />
</svg>
