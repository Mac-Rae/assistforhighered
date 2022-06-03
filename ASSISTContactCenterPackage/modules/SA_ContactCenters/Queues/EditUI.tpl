
<select id="queues" name="queues[]" multiple="multiple">
    {foreach from=$queues item=queue}
        <option {if $queue.selected}selected="selected"{/if}value="{$queue.id}">{$queue.name}</option>
    {/foreach}
</select>