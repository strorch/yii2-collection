<?php

/*
 * Collection library for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-collection
 * @package   yii2-collection
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\collection;

/**
 * Manager Component.
 * Instantiates all it's items when getting.
 */
class Manager extends \yii\base\Component implements \ArrayAccess, \IteratorAggregate, \yii\base\Arrayable
{
    use ManagerTrait;
}
