<script lang="ts">
	import { mode } from "mode-watcher";
	import { Toaster as Sonner, type ToasterProps as SonnerProps } from "svelte-sonner";
	import RiLoaderLine from 'remixicon-svelte/icons/loader-line';
	import RiCheckboxCircleLine from 'remixicon-svelte/icons/checkbox-circle-line';
	import RiErrorWarningLine from 'remixicon-svelte/icons/error-warning-line';
	import RiInformationLine from 'remixicon-svelte/icons/information-line';
	import RiCloseCircleLine from 'remixicon-svelte/icons/close-circle-line';

	let { ...restProps }: SonnerProps = $props();
</script>

<Sonner
	theme={mode.current}
	class="toaster group"
	style="--normal-bg: var(--color-popover); --normal-text: var(--color-popover-foreground); --normal-border: var(--color-border);"
	toastOptions={{
		classes: {
			toast: "cn-toast",
		},
	}}
	{...restProps}
>
	<RiLoaderLine slot="loading-icon" class="size-4 animate-spin" />
	<RiCheckboxCircleLine slot="success-icon" class="size-4" />
	<RiErrorWarningLine slot="error-icon" class="size-4" />
	<RiInformationLine slot="info-icon" class="size-4" />
	<RiCloseCircleLine slot="warning-icon" class="size-4" />
</Sonner>
