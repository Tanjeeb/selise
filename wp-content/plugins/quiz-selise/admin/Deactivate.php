<?php

namespace Admin;

class Deactivate
{
    function deactivete(){
        flush_rewrite_rules();
    }
}
