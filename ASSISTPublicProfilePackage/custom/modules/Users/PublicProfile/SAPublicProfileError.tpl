
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Profile</title>
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
            <div class="alert alert-danger" role="alert">
                {if $error == 'no_user'}
                    No user found.
                {elseif $error == 'meetings_disabled'}
                    Sorry, meetings cannot be booked with this user at the moment.
                {elseif $error == 'bad_meeting_date'}
                    Sorry, there was a problem with the date you chose. Please try again.
                {elseif $error == 'meeting_date_taken'}
                    Sorry, it seems that this meeting slot was taken. Please select another.
                {else}
                    Unknown Error
                {/if}
            </div>
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

