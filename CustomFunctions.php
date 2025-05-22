<?php

namespace ZOOlanders\CustomActions;

class CustomFunctions
{

    // Create a new function using the same structure, and use function's name when adding the action to the form
    public static function CustomAction($submission): array
    {
        // Add Custom Code
        

        // Sample Response
        $response = [
            'success' => true,
            'message' => 'Message, if something went wrong',
            'data' => 'This is the value to be returned on successfull action',
        ];

        return $response;
    }
}
