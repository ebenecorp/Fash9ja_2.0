<?php

namespace App\BaseRepository;

use App\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class BaseRepository
 * 
 * @package \App\Repositories
 */

 class BaseRepository implements BaseContract{

     /**
     * @var Model
     */

    protected $model;

    /**
     * BaseRepository constructor
     * @param Model $model
     */

    public function __construct(Model $model){

        $this->model = $model;

    }

    /**
     * @param array $attributes
     * @return mixed
     * 
     */

     public function create(array $attributes){
        return $this->model->create($attributes);
     }


     /**
      * @param array $attributes 
      * @param int $id
      * @return bool 
      *
      */

     public function update(array $attributes, int $id):bool{
         return $this->find($id)->update($attributes);

     }

     

 }