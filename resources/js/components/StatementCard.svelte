<script lang="ts">
    import * as Card from "@/components/ui/card/index";

    /**
 * @property int $id
 * @property int $value
 * @property string $description
 * @property string $from
 * @property DateTime $date
 */
    const { transaction } = $props();

    function defineColor(): string
    {
        return transaction.value > 0 ? "#00a63e" : "#e7000b"
    }

    const cardColor = defineColor();

    function parseValue(value: number): string
    {
        return "R$ " + (value/100).toLocaleString('pt-br', { minimumFractionDigits: 2 });
    }

</script>
 
<Card.Root class="flex w-full h-18 max-w-none justify-center pt-11">
    <Card.Header>
        <Card.Title class="text-base">{transaction.from}</Card.Title>
        <Card.Description class="text-sm">{transaction.description}</Card.Description>
        <Card.Action 
            class="text-base text-right font-semibold whitespace-nowrap"
            style="color: {cardColor}"
        >{parseValue(transaction.value)}</Card.Action>
    </Card.Header>
    <Card.Content>
    </Card.Content>
    <Card.Footer class="flex-col gap-2">
    </Card.Footer>
</Card.Root>