<ul style="list-style: disc; padding-left: 10px;">
    {foreach from=$queues item=queue}
        {if $queue.selected}
            <li class="">{$queue.name}</li>
        {/if}
    {/foreach}
</ul>

