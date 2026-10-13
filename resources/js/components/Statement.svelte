<script lang="ts">
    import * as NavigationMenu from "@/components/ui/navigation-menu/index";
    import Button from "@/components/ui/button/Button.svelte"

    const selected = "flex-1 w-full bg-background text-primary border-b border-primary";
    const unselected = "flex-1 w-full bg-background text-primary";

    let selectedTab = $state("all");
</script>

<div class="w-full">
    <div class="flex w-full">
        <!--All-->
        <Button 
            class={ selectedTab === "all" ? selected : unselected }
            variant='secondary'
            onclick={() => (selectedTab = "all") }
        >
            Tudo
        </Button>

        <!--Inflow-->
        <Button 
            class={ selectedTab == "inflow" ? selected : unselected }
            variant='secondary'
            onclick={() => (selectedTab = "inflow") }
        >
            Entradas
        </Button>
        
        <!--Outflow-->
        <Button 
            class={ selectedTab == "outflow" ? selected : unselected }
            variant='secondary'
            onclick={() =>  (selectedTab = "outflow") }
        >
            Saídas
        </Button>
    </div>
</div>