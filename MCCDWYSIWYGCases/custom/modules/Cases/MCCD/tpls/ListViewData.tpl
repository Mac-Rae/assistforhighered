<style>
    {literal}
    .case_data_head{
        font-size: 3em;
    }
    .case_data_sub{
        font-size: 1.25em;
    }
    .icon-btn-lst .icon-btn {
        border-radius: 4px;
        min-height: 125px;
    }
    {/literal}
</style>
<ul class="icon-btn-lst">
{foreach from=$case_data key="label" item="data"}
    <li class="icon-btn case-card">
        <h3 class="case_data_head">{$data}</h3>
        <span class="case_data_sub">{$label}</span>
    </li>
{/foreach}
</ul>