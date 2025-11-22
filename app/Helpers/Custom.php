<?php

function cleanHtml($value)
{
    return strip_tags($value ?? '');
}
