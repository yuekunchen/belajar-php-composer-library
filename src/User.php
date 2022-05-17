<?php
  namespace YuekunChen\Belajar;

  class User
  {
    private string $user;

    public function __construct(string $user)
    {
      $this->user = $user;
    }

    public function greetUser(string $name = "Guest"): string
    {
      return "Welcome $name, My name is $this->user";
    }
  }
