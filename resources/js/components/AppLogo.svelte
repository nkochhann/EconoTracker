<script lang="ts">
    import { page } from '@inertiajs/svelte';
    import AppLogoIcon from '@/components/AppLogoIcon.svelte';

    const name = $derived(page.props.name);
</script>

<div
    class="flex aspect-square size-10 items-center justify-center rounded-md bg-sidebar-secondary text-sidebar-primary-foreground"
>
    <AppLogoIcon class="size-8 fill-current text-primary" />
</div>
<div class="ml-1 grid flex-1 text-left text-sm">
    <span class="mb-0.5 text-base truncate leading-tight font-semibold text-primary dark:text-white">{name}</span>
</div>
