<script module lang="ts">
    import { create } from '@/actions/App/Http/Controllers/TransactionController';
    import { dashboard } from '@/routes';

    export const layout = {
        breadcrumbs: [
            {
                title: 'Dashboard',
                href: dashboard()
            },
            {
                title: 'Create transaction',
                href: create()
            },
        ],
    };
</script>

<script lang="ts">
    import AppHead from '@/components/AppHead.svelte';
    import PlaceholderPattern from '@/components/PlaceholderPattern.svelte';
</script>

<AppHead title='Transaction creation' />

<p>Allow!</p>