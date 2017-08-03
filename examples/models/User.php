<?php
/**
 * Created by PhpStorm.
 * User: maykonn
 * Date: 03/08/17
 * Time: 18:07
 */

class User
{
    public function update($id)
    {
        // Code to update User on persistent database ...

        // ...

        // Loading CI Dynamic Hook Library
        $this->load->library('Hook');

        // Execute a hook
        (new Hook())->call('UserWasUpdated', $id);
    }
}