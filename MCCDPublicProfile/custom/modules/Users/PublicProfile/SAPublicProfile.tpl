
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{$user_data.name} Profile</title>
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
</head>
<body>
<nav class="topBar">
    {if $top_html}
        {$top_html}
    {else}
        <h2>We are here to help!</h2>
    {/if}
</nav>

<main role="main" class="container" style="min-height:80vh">
    <div class="row">
        <div class="col-12">
{if $status == 'booked'}
    <div class="alert alert-success" role="alert">
        Meeting successfully booked.
    </div>
{/if}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 institution-header">
            <h3>{$user_data.institution_name}</h3>
        </div>
        <div class="col-md-9 col-sm-12">
            {if $user_data.is_out_of_office}
                <div class="card">
                    <div class="card-body bg-warning">
                        <h5 class="card-title"></h5>
                        <div class="card-text">
                            This staff member is currently out of office and will return on
                            <strong>{$user_data.out_of_office_end}</strong>.
                        </div>
                    </div>
                </div>
            {elseif $user_data.business_days && $user_data.business_hours_start && $user_data.business_hours_end}
            <div class="card">
                <div class="card-body {if $user_data.within_business}bg-success{else}bg-warning{/if}">
                    <h5 class="card-title"></h5>
                    <div class="card-text">
                        {if $user_data.within_business}
                            It is currently inside my office hours, which are
                        {else}
                            Please note, it is currently outside my office hours, which are
                        {/if}
                        <strong>{$user_data.business_days}</strong> between
                        <strong>{$user_data.business_hours_start}</strong> and
                        <strong>{$user_data.business_hours_end}</strong> Arizona Time.

                    </div>
                </div>
            </div>
            {/if}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12">
            {if $user_data.photo}
                <div class="text-center">
                    <img class="img-fluid user-photo" src="data:image;base64,{$user_data.photo}"/>
                </div>
            {/if}
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Contact Information
                </div>
                <div class="card-body">
                    <h5 class="card-title">{$user_data.first_name} {$user_data.last_name}</h5>
                    <div class="card-text">
                        {$user_data.title} {$user_data.department}<br>
                        {if $user_data.email_address}<p><strong>E:</strong> {$user_data.email_address}</p>{/if}
                        {if $user_data.phone}<p><strong>P:</strong> {$user_data.phone}</p>{/if}
                        {if $user_data.webex}<p><strong>Webex:</strong> {$user_data.webex}</p>{/if}
                    </div>
                    {if $user_data.linkedin}
                        <a class="social" href="{$user_data.linkedin}">
                            <img src="{$site_url}/custom/modules/Users/PublicProfile/images/Linkedin.png"/>
                        </a>
                    {/if}
                    {if $user_data.twitter}
                        <a class="social"  href="{$user_data.twitter}">
                            <img src="{$site_url}/custom/modules/Users/PublicProfile/images/Twitter.png"/>
                        </a>
                    {/if}
                    {if $user_data.email_address}<a class="btn btn-primary" href="mailto:{$user_data.email_address}">Send Email</a>{/if}
                    {if $user_data.meeting_days && $user_data.meeting_hours_start && $user_data.meeting_hours_end}
                        <a href="{$meetingURL}" class="btn btn-primary">Schedule Meeting</a>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {if $user_data.biography}
            <div class="card">
                <div class="card-header">
                    About Me
                </div>
                <div class="card-body">
                    <h5 class="card-title">Biography</h5>
                    <div class="card-text">
                        {$user_data.biography}
                    </div>
                </div>
            </div>
            {/if}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {if $user_data.institution_name}
            <div class="card">
                <div class="card-header">
                    Institution Information
                </div>
                <div class="card-body">
                    <h5 class="card-title">{$user_data.institution_name}</h5>
                    <div class="card-text">
                        {$user_data.institution_address}<br>
                        {$user_data.institution_phone}
                    </div>
                </div>
            </div>
            {/if}
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

