<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    protected $statusCode = Response::HTTP_OK;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message);
    }

    public function respondInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(ResPonse::HTTP_INTERNAL_SERVER_ERROR)
            ->respondWithError($message);
    }

    public function respondUnprocessableEntity($message = 'Unprocessable Entity')
    {
        return $this->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->respondWithError($message);
    }

    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    public function respondCreated($message)
    {
        return $this->setStatusCode(Response::HTTP_CREATED)->respond([
            'message' => $message
        ]);
    }

    protected function respondWithPagination(LengthAwarePaginator $lessons, $dataArray)
    {
        return $this->respond(
            array_merge(
                $dataArray,
                [
                    'paginator' => [
                        'current_page' => $lessons->currentPage(),
                        'total_page' => $lessons->lastPage(),
                        'limit' => $lessons->perPage(),
                        'total_count' => $lessons->total(),
                        'next_page_url' => $lessons->nextPageUrl(),
                        'prev_page_url' => $lessons->previousPageUrl()
                    ]
                ]
            )
        );
    }
}
