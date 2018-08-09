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

class CompetitorApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation addCompetitor
     *
     * Add a new competitor.
     *
     *
     * @return Http response
     */
    public function addCompetitor()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addCompetitor');
        }
        $body = $input['body'];


        return response('How about implementing addCompetitor as a post method ?');
    }
    /**
     * Operation getCompetitors
     *
     * Find competitors.
     *
     *
     * @return Http response
     */
    public function getCompetitors()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $first_name = $input['first_name'];

        $last_name = $input['last_name'];

        $email_name = $input['email_name'];

        $hipchat = $input['hipchat'];


        return response('How about implementing getCompetitors as a get method ?');
    }
    /**
     * Operation updateCompetitor
     *
     * Update an existing competitor.
     *
     *
     * @return Http response
     */
    public function updateCompetitor()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCompetitor');
        }
        $body = $input['body'];


        return response('How about implementing updateCompetitor as a put method ?');
    }
    /**
     * Operation deleteCcompetitor
     *
     * Deletes a competitor.
     *
     * @param int $competitor_id Ccompetitor id to delete (required)
     *
     * @return Http response
     */
    public function deleteCcompetitor($competitor_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteCcompetitor as a delete method ?');
    }
    /**
     * Operation getCompetitorById
     *
     * Find competitor by ID.
     *
     * @param int $competitor_id ID of competitor to return (required)
     *
     * @return Http response
     */
    public function getCompetitorById($competitor_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getCompetitorById as a get method ?');
    }
    /**
     * Operation updateCompetitorWithForm
     *
     * Updates a competitor in the store with form data.
     *
     * @param int $competitor_id ID of competitor that needs to be updated (required)
     *
     * @return Http response
     */
    public function updateCompetitorWithForm($competitor_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateCompetitorWithForm as a post method ?');
    }
}
