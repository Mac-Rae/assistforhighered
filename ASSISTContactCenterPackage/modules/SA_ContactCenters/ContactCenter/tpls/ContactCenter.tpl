<style>
    {literal}
    #display_stats_span{
        display: block;
    }
    {/literal}
</style>
<label>{$MOD.LBL_AUTO_REFRESH}: <input id="auto_refresh" {if $autoRefresh}checked="checked"{/if} type="checkbox"/></label>&nbsp;<small>{$MOD.LBL_LAST_UPDATE}: {$lastUpdate}</small>

<h1>{$contactCenter.name}</h1>
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

{literal}
<script>
    var refreshRate = 60000;//60 seconds
    function checkRefresh(){
        if($('#auto_refresh').is(":checked")){
            var url = window.location.href;
            if(url.indexOf('auto_refresh=1') === -1) {
                if (url.indexOf('?') > -1) {
                    url += '&auto_refresh=1'
                } else {
                    url += '?auto_refresh=1'
                }
            }
            window.location.href = url;
        }
        setTimeout(checkRefresh,refreshRate);
    }
    $(document).ready(function(){
        setTimeout(checkRefresh,refreshRate);
    });
</script>
{/literal}