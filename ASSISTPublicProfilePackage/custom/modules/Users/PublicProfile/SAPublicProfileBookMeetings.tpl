
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
    {if $recaptchaKey}
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {/if}
    <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous"></script>
</head>
<body>
<nav class="topBar">
    {if $top_html}
        {$top_html}
    {else}
        <h2>Book Meeting</h2>
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
            {if $user_data.photo}<img class="user-photo" src="data:image;base64,{$user_data.photo}"/>{/if}
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="index.php">
                <input type="hidden" name="entryPoint" value="PublicProfileBookMeetingHandler"/>
                <input type="hidden" name="user" value="{$user_data.id}"/>
                <input type="hidden" name="slot" value="{$slot}"/>
                {if $error}
                    <div class="form-group">
                        <div class="alert-danger">
                            {$error|escape}
                        </div>
                    </div>
                {/if}
                <div class="form-group">
                    <label class="font-weight-bold" for="maricopa_id">Booking</label>
                    <div class="">{$slotDisplay}</div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="meeting_type">Meeting Format</label>
                    {if empty($meeting_types)}
                    {elseif $meeting_types|count == 1}
                        {foreach from=$meeting_types key=meeting_type item=label}
                            <input type="hidden" name="meeting_type" value="{$meeting_type}"/>
                        {/foreach}
                    {else}
                        {foreach from=$meeting_types key=meeting_type item=label}
                            <div class="form-check">
                                <input class="form-check-input" id="meeting_type_{$meeting_type}" type="radio" name="meeting_type" value="{$meeting_type}"/>
                                <label class="form-check-label" for="meeting_type_{$meeting_type}">
                                    {$label}
                                </label>

                            </div>
                        {/foreach}
                    {/if}
                    {literal}
                        <script>
                            $(document).ready(function(){
                                $('[name="meeting_type"]').first().attr('checked',true);
                            });
                        </script>
                    {/literal}
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="maricopa_id">Maricopa ID (MEID)</label>
                    <input class="form-control" minlength="10" maxlength="10" type="text" name="maricopa_id"/>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold" for="name">First Name <span class="required">*</span></label>
                        <input class="form-control" required="required" type="text" name="first_name"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold" for="name">Last Name <span class="required">*</span></label>
                        <input class="form-control" required="required" type="text" name="last_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="phone">Phone Number (XXX-XXX-XXXX) <span class="required">*</span></label>
                    <input class="form-control" pattern="[0-9]{ldelim}3{rdelim}-[0-9]{ldelim}3{rdelim}-[0-9]{ldelim}4{rdelim}" placeholder="602-555-0199" required="required" type="tel" name="phone"/>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="email_address">Email Address <span class="required">*</span></label>
                    <input class="form-control" required="required" type="email" name="email_address"/>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="reason">Reason for Meeting <span class="required">*</span></label>
                    <textarea class="form-control" required="required" type="text" name="reason"></textarea>
                </div>
                {if $recaptchaKey}
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="{$recaptchaKey}"></div>
                </div>
                {/if}
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Book Meeting</button>
                </div>
            </table>
            </form>
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
                    <img src="{$site_url}/custom/modules/Users/PublicProfile/images/logo.svg"/>
                </div>
            </div>
        {/if}
    </div>
</footer>



</body>
</html>

