<?php

if (! function_exists('alert')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @param  string      $level
     * @return \Laracasts\Flash\FlashNotifier
     */
    function alert($message = null, $level = 'info')
    {
        $notifier = app('bcalert');

        if (! is_null($message)) {
            return $notifier->message($message, $level);
        }

        return $notifier;
    }

}
