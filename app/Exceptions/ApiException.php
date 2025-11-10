<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class ApiException extends Exception
{
    /**
     * Report the exception.
     */
    public function report(): void
    {
        // ...
    }

    /**
     * Render the exception into an HTTP json response.
     */
    public function render(Request $request) 
    {
        return response()->json([
            "status" => "error",
            "message" => $this->getMessage(),
        ], $this->getCode());
    }

    public static function notAcceptable(string $message = 'Unable to send response in this format') : ApiException
    {
        return new self($message, 406);
    }

    public static function unauthorized(string $message = 'Unauthorized') : ApiException
    {
        return new self($message, 401);
    }

}
