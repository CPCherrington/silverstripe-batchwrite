<?php

namespace BatchWrite\Tests;

class Human extends \DataObject
{
    public static $db = array(
        'Name' => 'Varchar',
    );

    public static $many_many = array(
        'Children' => 'BatchWrite\Tests\Child',
    );
}
