<?php

namespace B2B\Module\Http\Controllers;

class ModuleController
{
    public function index()
    {
        return view('module.index', compact(config('module.testKey')));
    }
}