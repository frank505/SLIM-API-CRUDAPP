<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use App\Controllers\GuestEntryController;
use App\Response\CustomResponse;



return function (App $app) {



    $app->post('/create-guest', [GuestEntryController::class, 'createGuest']);

    // Allow preflight requests for /
    $app->options('/create-guest', function (ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
        return $response;
    });

    $app->get('/view-guests', [GuestEntryController::class, 'viewGuest']);

    // Allow preflight requests for /
    $app->options('/view-guests', function (ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
        return $response;
    });

    $app->get('/get-single-guest/{id}', [GuestEntryController::class, 'getSingleGuest']);
    $app->put('/edit-single-guest/{id}', [GuestEntryController::class, 'editGuest']);
    $app->delete('/delete-guest/{id}', [GuestEntryController::class, 'deleteGuest']);
};   


