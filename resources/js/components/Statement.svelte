<script lang="ts">
    import Button from "@/components/ui/button/Button.svelte";
    import StatementCard from "@/components/StatementCard.svelte";

    const selected = "flex-1 w-full bg-background text-primary border-b border-primary";
    const unselected = "flex-1 w-full bg-background text-primary";

    let selectedTab = $state("all");

    const transaction = {
        value: 38500,
        description: "Pix enviado",
        from: "Marcelo Henrique de Freitas Almeida",
        date: new Date('09/14/2026')
    }
</script>

<div class="flex-row w-full h-full">
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
    <div class="flex-row w-full h-full bg-background">
        <StatementCard {transaction} />
        <StatementCard {transaction} />
        <StatementCard {transaction} />
    </div>
</div>