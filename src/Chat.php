<?php

  namespace PerformanceSupport;
  use Ratchet\MessageComponentInterface;
  use Ratchet\ConnectionInterface;

  /**
   * Chat plugin using ratchet
   * PerformanceSupport
   */
  class Chat implements MessageComponentInterface
  {

    private $clients;

    function __construct()
    {
      $this->clients = \SplFileObject;
    }

    // method called when a client connect
    public function onOpen(ConnectionInterface $connect = '')
    {
      # code...
    }

    public function onMessage(ConnectionInterface $from = '', $msg)
    {
      echo $msg;
    }
    public function onClose(ConnectionInterface $connect = '')
    {
      # code...
    }
    public function onError(ConnectionInterface $connect = '', \Exception $e)
    {
      # code...
    }

  }


?>
