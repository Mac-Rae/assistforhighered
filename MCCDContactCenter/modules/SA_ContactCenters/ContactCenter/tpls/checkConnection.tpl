<button type="button" id="checkConnectionButton" class="button">{$MOD.LBL_CHECK_CONNECTION}</button>
<script>
    {literal}
    $(document).ready(function(){
        $('#checkConnectionButton').click(function(){
            var instanceId = $('#instance_id').val();
            $.get("index.php?module=SA_ContactCenters&sugar_body_only=1&action=checkConnection&instance_id="+instanceId,function(data){
                alert('{/literal}{$MOD.LBL_CONNECTION_SUCCESSFUL}{literal}');
                var selected = $('#queues').val();
                $('#queues').find('option').remove();
                for(var x = 0; x < data.length; x++){
                    $('#queues').append("<option value='"+data[x]['id']+"'>"+data[x]['name']+"</option>");
                }
                $('#queues').val(selected);
            },"json").fail(function(){
                alert('{/literal}{$MOD.LBL_CONNECTION_FAILED}{literal}');
            });
        });
    });
    {/literal}
</script>