<?php


class User
{

    //método mágico invoke, para trabalhar com o Ca
    public function __invoke()
    {

        return "teste";
    }
}

$user = new User;

function teste($callback)
{
    return $callback();
}

echo teste($user);
