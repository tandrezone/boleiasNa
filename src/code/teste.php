<?php
use App\Models\User;

$user = new User();
$user->setUsername("t0");
$user->setStatus(1);
$user->setCreated();
$entityManager->persist($user);
$entityManager->flush();
