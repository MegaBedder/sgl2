<?php
/**
 *
 */
interface SGL2_Event_Interface
{
    public function cancel();

    public function isCancelled();

    public function getName();

    public function getParameters();

    public function queueEvent();
}
?>