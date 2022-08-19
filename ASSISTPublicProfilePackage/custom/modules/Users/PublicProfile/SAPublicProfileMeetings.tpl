
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Schedule Meeting</title>
    <link href="{$site_url}/custom/modules/Users/PublicProfile/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$site_url}/custom/modules/Users/PublicProfile/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous"></script>
    {if $custom_css}
        <style>
            {$custom_css}
        </style>
    {/if}
    {if $colour_css}
        <style>
            {$colour_css}
        </style>
    {/if}
</head>
<body>
<nav class="topBar">
    {if $top_html}
        {$top_html}
    {else}
        <h2>Schedule Meeting</h2>
    {/if}

</nav>

<main role="main" class="container" style="min-height:100vh">
    <div class="row">
        <div class="col-12 topBar">

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6  d-flex justify-content-center">
            <a href="{$profile_link}">Back to profile</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6  d-flex justify-content-center">
            {if $user_data.photo}<img alt="Photo of {$user_data.first_name} {$user_data.last_name}" class="user-photo" src="data:image;base64,{$user_data.photo}"/>{/if}
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="booking_block_buttons">
            {foreach from=$meeting_blocks key=block_name item=meeting_slots}
                <button class="btn btn-primary block_button" data-block="{$block_name}">{$block_name}</button>
            {/foreach}
            </div>
            {literal}
            <script>
                var cur_day_offset = 0;
                var show_days = 5;
                var total_days = 15;
                $(document).ready(function(){
                    function calculateShowDays() {
                        var width = $(window).width();
                        if (width <= 640) {
                            show_days = 3;
                        }else if(width <= 920){
                            show_days = 4;
                        }else{
                            show_days = 5;
                        }
                    }

                    $(window).resize(function() {
                        calculateShowDays();
                        change_day(0);
                    });
                    calculateShowDays();
                    function change_day(change){
                        $('#day-prev').removeAttr("disabled");
                        $('#day-next').removeAttr("disabled");
                        cur_day_offset += change;
                        if(cur_day_offset <= 1){
                            cur_day_offset = 1;
                            $('#day-prev').attr("disabled","disabled");
                        }
                        if(cur_day_offset >= total_days-show_days+1){
                            cur_day_offset = total_days-show_days+1;
                            $('#day-next').attr("disabled","disabled");
                        }
                        for(var x = 0; x <= total_days;x++){
                            if(x < cur_day_offset || x >= (cur_day_offset+show_days)) {
                                $(".day-col-" + x).hide();
                            }else{
                                $(".day-col-" + x).show();
                            }
                        }

                    }
                    change_day(false);
                    $('#day-prev').click(function(){
                        change_day(-1);
                    });
                    $('#day-next').click(function(){
                        change_day(1);
                    });
                    $(".block_button").click(function(e){
                        var t = $(e.target);
                        t.removeClass("btn-primary");
                        $('.btn-outline-primary').addClass("btn-primary");
                        $('.btn-outline-primary').removeClass("btn-outline-primary")
                        t.addClass("btn-outline-primary");
                        $(".meeting-blocks").hide();
                        $(".meeting-blocks[data-block='"+t.data("block")+"'").show();
                    });
                    $(".block_button").first().click();

                })
            </script>
            {/literal}
        </div>
    </div>
    <div class="row  justify-content-center"">
        <div class="col-auto">
                <button id="day-prev" class="btn btn-primary" disabled="disabled">Prev</button>
            &nbsp;
            <button id="day-next"  class="btn btn-primary">Next</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <form action="{$site_url}/index.php" class="meeting_slots_form">
                <input type="hidden" name="entryPoint" value="PublicProfileBookMeeting"/>
                <input type="hidden" name="user" value="{$user_data.id}"/>
                {foreach from=$meeting_blocks key=block_name item=meeting_slots}
            <table style="display: none;" class="meeting-blocks" data-block="{$block_name}">
                <tr>
                    {counter  start=0 print=0}
                    {foreach from=$meeting_slots key=day item=slot}
                        <th class="day-col-{counter}">{$day}</th>
                    {/foreach}
                </tr>
                    {foreach from=$meeting_times[$block_name] item=time}
                        <tr>
                            {counter  start=0 print=0}
                        {foreach from=$meeting_slots key=day item=slot}
                            <td class="day-col-{counter}">
                                {if $meeting_slots[$day][$time].free}
                                    <button type="submit" name="slot" value="{$meeting_slots[$day][$time].slot_info}" class="btn btn-success">{$time}</button>
                                {else}
                                    <span style="text-decoration: line-through">{$time}</span>
                                {/if}
                            </td>
                        {/foreach}
                </tr>
                    {/foreach}
            </table>

                {/foreach}
            </form>
            <br>
            <div class="alert alert-info">All times are {$user_data.tz_display}</div>
        </div>
    </div>
</main><!-- /.container -->
<footer class="footer">
    <div class="container">
        {if $bottom_html}
            {$bottom_html}
        {else}
            <div class="row">
                <div class="col-3">
                    <img alt="Site Logo" src="{$site_url}/custom/modules/Users/PublicProfile/images/logo.svg"/>
                </div>
            </div>
        {/if}
    </div>
</footer>



</body>
</html>

