<?php

namespace Bacao\Alert;

class AlertNotifier
{
    protected $session;


    public $messages;


    function __construct(SessionStore $session)
    {
        $this->session = $session;
        $this->messages = collect();
    }


    public function info($message = null)
    {
        return $this->message($message, 'info');
    }


    public function success($message = null)
    {
        return $this->message($message, 'success');
    }


    public function error($message = null)
    {
        return $this->message($message, 'error');
    }


    public function warning($message = null)
    {
        return $this->message($message, 'warning');
    }

    public function message($message = null, $level = null)
    {
        $this->session->flash('flash_notification.message', $message);
        $this->session->flash('flash_notification.type', $level);
        return $this;
    }

}

