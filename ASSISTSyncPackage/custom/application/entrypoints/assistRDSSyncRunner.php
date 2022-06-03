<?php

require_once 'custom/application/Services/assistRDSSync.php';

$entrypoint = new assistRDSSync();

$entrypoint->run();
