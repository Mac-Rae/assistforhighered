<?php

require_once 'custom/application/Services/mccdRDSSync.php';

$entrypoint = new mccdRDSSync();

$entrypoint->run();
