<?php

if (!function_exists('photo')) {
    function photo()
    {
        return url("/") . '/photos';
    }
}