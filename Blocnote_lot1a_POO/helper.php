<?php

function getUri() : string 
{
    return explode("?", $_SERVER['REQUEST_URI'])[0];
}

// echo getUri();   // si votre URL est http://localhost/blocnote/   , votre URI sera /Blocnote/