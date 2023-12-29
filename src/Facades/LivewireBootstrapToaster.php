<?php

namespace Jecharlt\LivewireBootstrapToaster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jecharlt\LivewireBootstrapToaster\LivewireBootstrapToaster
 */
class LivewireBootstrapToaster extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jecharlt\LivewireBootstrapToaster\LivewireBootstrapToaster::class;
    }
}
