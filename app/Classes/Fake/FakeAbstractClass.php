<?php

namespace App\Classes\Fake;

abstract class FakeAbstractClass implements IFakeInterface
{
    private function func1()
    {
        // TODO-vardump VAR_DUMP
        var_dump('func1');
    }

    public function func2()
    {
        // TODO-vardump VAR_DUMP
        var_dump('func2');
    }

    abstract public function func3();
    abstract protected function func4();

}
