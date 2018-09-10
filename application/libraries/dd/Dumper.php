<?php
/**
 * Created by PhpStorm.
 * User: Uttam Dhungana
 * Date: 1/18/2018
 * Time: 9:28 PM
 */

require ('VarCloner.php');
require ('CliDumper.php');
require ('HtmlDumper.php');

class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

            $dumper->dump((new VarCloner)->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}



















