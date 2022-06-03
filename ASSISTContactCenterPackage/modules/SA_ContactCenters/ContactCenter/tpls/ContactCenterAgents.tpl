<style>
    {literal}
    #display_stats_span{
        display: block;
    }
    {/literal}
</style>

<h1>{$contactCenter.name}</h1>
<div class="table-responsive">
    <table class="table table-sm">
        <tr>
            <th>{$MOD.LBL_AGENTS_NAME}</th>
            <th>{$MOD.LBL_AGENTS_EMAIL}</th>
        </tr>
        {foreach from=$agents item=agent}
            <tr>
                <td>
                    {$agent.name}
                </td>
                <td>
                    {$agent.email}
                </td>
            </tr>
        {/foreach}
    </table>
</div>