<span class="{$vardef}_redacted_tooltip" style="position: relative;">
    --REDACTED--
    <span class="suitepicon suitepicon-action-info" title="{$APP.LBL_REDACTED_FIELD}">
    </span>
</span>
{literal}
    <script>
$(document).ready(function(){
    var elem = $(".{/literal}{$vardef}{literal}_redacted_tooltip").closest('div');
    elem.off("click");
    elem.off("dblclick");
    elem.removeClass("inlineEdit");
    elem.find(".inlineEditIcon").remove();
});
    </script>
{/literal}
