<?php
/**
 * Created by PhpStorm.
 * User: Uttam Dhungana
 * Date: 1/18/2018
 * Time: 10:24 PM
 */

interface ClonerInterface
{
    /**
     * Clones a PHP variable.
     *
     * @param mixed $var Any PHP variable
     *
     * @return Data The cloned variable represented by a Data object
     */
    public function cloneVar($var);
}
