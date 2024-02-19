<?php

namespace AT\RestfulApi;

require_once  dirname(__DIR__)  . '/endpoints/User.php';

$action =  $_GET['action'] ?? null;
$userAction =  match ($action) {
    'create' => UserAction::CREATE,
    'retrieve' => UserAction::RETRIEVE,
    'remove' => UserAction::REMOVE,
    'update' => UserAction::UPDATE,
    default => UserAction::RETRIEVE_ALL,
};

echo $userAction->getResponse();
// match since php 8
enum UserAction: string
{
    case CREATE = 'create';
    case RETRIEVE = 'retrieve';
    case RETRIEVE_ALL = 'retrieveAll';
    case REMOVE = 'remove';
    case UPDATE = 'update';
    public function getResponse(): string
    {
        // null collecting operator
        $userid =  (int)$_GET['user_id'] ?? 0;
        $user = new User();
        return match ($this) {
            self::CREATE => $user->create(),
            self::RETRIEVE => $user->retrieve($userId),
            self::RETRIEVE_ALL => $user->retrieveAll(),
            self::REMOVE => $user->remove(),
            self::UPDATE => $user->update(),
        };
    }
}
