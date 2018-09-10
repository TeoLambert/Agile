<?php
/**
 * Created by PhpStorm.
 * User: Uttam Dhungana
 * Date: 1/18/2018
 * Time: 10:21 PM
 */

/**
 * DataDumperInterface for dumping Data objects.
 */
interface DataDumperInterface
{
    public function dump(Data $data);
}
