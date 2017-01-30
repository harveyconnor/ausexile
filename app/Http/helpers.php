<?php

function viewVue()
{
    return ($viewVue = str_replace('/', '-', request()->decodedPath())) == '-'
        ? 'home-view'
        : $viewVue . '-view';
}
