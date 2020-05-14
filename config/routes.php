<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Controllers\GuestEntryController;
use App\Response\CustomResponse;



return function (App $app) {

    $app->post('/create-guest', [GuestEntryController::class, 'createGuest']);
    $app->get('/view-guests', [GuestEntryController::class, 'viewGuest']);
    $app->get('/get-single-guest/{id}', [GuestEntryController::class, 'getSingleGuest']);
    $app->put('/edit-single-guest/{id}', [GuestEntryController::class, 'editGuest']);
    $app->delete('/delete-guest/{id}', [GuestEntryController::class, 'deleteGuest']);
};   


