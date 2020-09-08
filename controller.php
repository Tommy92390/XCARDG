<?php

require('model.php');

function getHeading()
{
    $heading = getHeading();
    require('principalView.php');
}

function getAd()
{
    $ad = getAdvertising($_GET['id']);
    require('principalView.php');
}

