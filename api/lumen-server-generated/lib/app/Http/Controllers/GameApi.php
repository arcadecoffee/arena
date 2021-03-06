<?php

/**
 * SpareFoot Arena
 * This is the API for the SpareFoot Arena hackathon project
 *
 * OpenAPI spec version: 1.0.0
 * Contact: patrick@sparefoot.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class GameApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation addGame
     *
     * Add a new game.
     *
     *
     * @return Http response
     */
    public function addGame()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addGame');
        }
        $body = $input['body'];


        return response('How about implementing addGame as a post method ?');
    }
    /**
     * Operation getGames
     *
     * Find games.
     *
     *
     * @return Http response
     */
    public function getGames()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $name = $input['name'];


        return response('How about implementing getGames as a get method ?');
    }
    /**
     * Operation updateGame
     *
     * Update an existing game.
     *
     *
     * @return Http response
     */
    public function updateGame()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateGame');
        }
        $body = $input['body'];


        return response('How about implementing updateGame as a put method ?');
    }
    /**
     * Operation deleteGame
     *
     * Deletes a game.
     *
     * @param int $game_id Game id to delete (required)
     *
     * @return Http response
     */
    public function deleteGame($game_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteGame as a delete method ?');
    }
    /**
     * Operation getGameById
     *
     * Find game by ID.
     *
     * @param int $game_id ID of game to return (required)
     *
     * @return Http response
     */
    public function getGameById($game_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getGameById as a get method ?');
    }
    /**
     * Operation updateGameWithForm
     *
     * Updates a game in the store with form data.
     *
     * @param int $game_id ID of competitor that needs to be updated (required)
     *
     * @return Http response
     */
    public function updateGameWithForm($game_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateGameWithForm as a post method ?');
    }
}
