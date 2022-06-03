<style>
    {literal}
    #display_stats_span{
        display: block;
    }
    {/literal}
</style>
{if $noQueues}
    <div class="error">{$MOD.LBL_NO_QUEUES_WARNING}</div>
{/if}
<div class="table-responsive">
<table class="table table-sm">
    <tr>
        <th>{$MOD.LBL_STATS_QUEUE}</th>
        <th>{$MOD.LBL_STATS_AGENTS_ONLINE}</th>
        <th>{$MOD.LBL_STATS_AGENTS_ON_CONTACT}</th>
        <th>{$MOD.LBL_STATS_AGENTS_AVAILABLE}</th>
        <th>{$MOD.LBL_STATS_SLOTS_ACTIVE}</th>
        <th>{$MOD.LBL_STATS_CONTACTS_IN_QUEUE_VOICE}</th>
        <th>{$MOD.LBL_STATS_CONTACTS_SCHEDULED}</th>
        <th>{$MOD.LBL_STATS_OLDEST_CONTACT_AGE_VOICE}</th>
        <th>{$MOD.LBL_STATS_CONTACTS_IN_QUEUE_CHAT}</th>
        <th>{$MOD.LBL_STATS_OLDEST_CONTACT_AGE_CHAT}</th>
    </tr>
    {foreach from=$stats item=stat}
        <tr>
            <td>
                {$stat.queue}
            </td>
            <td>
                {$stat.AGENTS_ONLINE}
            </td>
            <td>
                {$stat.AGENTS_ON_CONTACT}
            </td>
            <td>
                {$stat.AGENTS_AVAILABLE}
            </td>
            <td>
                {$stat.SLOTS_ACTIVE}
            </td>
            <td>
                {$stat.CONTACTS_IN_QUEUE_VOICE}
            </td>
            <td>
                {$stat.CONTACTS_SCHEDULED}
            </td>
            <td>
                {$stat.OLDEST_CONTACT_AGE_VOICE}
            </td>
            <td>
                {$stat.CONTACTS_IN_QUEUE_CHAT}
            </td>
            <td>
                {$stat.OLDEST_CONTACT_AGE_CHAT}
            </td>
        </tr>
    {/foreach}
</table>
</div>