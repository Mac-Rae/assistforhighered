<?php
$entry_point_registry['PublicProfile']=array(
    'file' => 'custom/modules/Users/entrypoints/PublicProfileRunner.php',
    'auth' => false,
);
$entry_point_registry['PublicProfileMeeting']=array(
    'file' => 'custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
    'auth' => false,
);
$entry_point_registry['PublicProfileBookMeeting']=array(
    'file' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
    'auth' => false,
);

$entry_point_registry['PublicProfileBookMeetingHandler']=array(
    'file' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
    'auth' => false,
);