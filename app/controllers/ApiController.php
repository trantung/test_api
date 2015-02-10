<?php
class ApiController extends BaseController{
   
    protected $statusCode =200; 

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function respondNotFound($message)
    {
        return $this->setStatusCode(404)->respondWithErrors($message);
        
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function respond($data, $headers =[])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithErrors($message)
    {
        return $this->respond([
                    'error' =>[
                         'message' =>$message,
                         'code' => $this->getStatusCode(),
                        ]
                     ]);
    }


}