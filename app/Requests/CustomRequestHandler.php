<?php


namespace App\Requests;


class CustomRequestHandler
{


    public static function getParam($request,$key, $default = null)
    {
        $postParams = $request->getParsedBody();

        $getParams = $request->getQueryParams();
        /**
         * this is needed if we are passsing json encoded data instead of formdata or x-wwww-form-urlencoded-data
         */
        $getBody = json_decode($request->getBody(),true);

        $result = $default;

        if (is_array($postParams) && isset($postParams[$key])) {
            $result = $postParams[$key];
        } elseif (is_object($postParams) && property_exists($postParams, $key)) {
            $result = $postParams->$key;
        }
        else if(is_array($getBody) && isset($getBody[$key]))
        {
            $result = $getBody[$key];
        }
        elseif (isset($getParams[$key])) {
            $result = $getParams[$key];
        }
        return $result;
    }


}