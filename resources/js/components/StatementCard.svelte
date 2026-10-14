<script lang="ts">
    import * as Card from "@/components/ui/card/index";

    /**
 * @property int $id
 * @property int $value
 * @property string $description
 * @property string $from
 * @property DateTime $date
 */
    const transaction = {
        value: 38500,
        description: "Pix enviado",
        from: "Marcelo Henrique de Freitas Almeida",
        date: new Date('09/14/2026')
    }

    const cardColor = transaction.value > 0 ? "#00a63e" : "#e7000b";

    function parseValue(value: number): string
    {
        return "R$ " + (value/100).toLocaleString('pt-br', { minimumFractionDigits: 2 });
    }

</script>
 
<Card.Root class="w-full h-20 max-w-none">
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