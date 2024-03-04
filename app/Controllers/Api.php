<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age", "3600");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Credentials", "true");

class Api extends ResourceController
{
    protected $modelName = 'App\Models\APIModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $website = isset($_GET['website']) ? $_GET['website'] : null;
        $calss = isset($_GET['class']) ? $_GET['class'] : null;
        $calss = str_replace("__", ".", $calss);
        // var_dump($website);

        // Menyimpan data dalam bentuk var
        if (!$website || !$calss) {
            // Menampilkan data
            $data = [
                'message' => 'succes',
                'data_artikel' =>  $this->model->getDataByParse($website),
            ];
            //
        } else {
            $data = [
                'message' => 'succes',
                'data_artikel' =>  $this->model->getDataAndDiv($website, $calss),
            ];
        }
        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return ResponseInterface
     */
    public function show($url = '', $param = '')
    {
        //
        // var_dump($param);
        if (!$param) {
            $data = [
                'message' => 'succes',
                'data_artikel' =>  $this->model->getDataByParse($url),
            ];
        } else {
            $data = [
                'message' => 'succes',
                'data_artikel' =>  $this->model->getDataAndDiv($url, $param),
            ];
        }
        return $this->respond($data, 200);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
