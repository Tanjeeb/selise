<?php

namespace Admin;

class Activate
{
    function activate(){
        flush_rewrite_rules();
    }
}
