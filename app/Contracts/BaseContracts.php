<?php

namespace App\Contracts;


/**
 * interface BaseContract
 * @pacakage App\Contracts
 * 
 */

 interface BaseContract{

        /**
         * create a model instance
         * @param array $attributes
         * @return mixed
         * 
         */

         public function create(array $attributes);


         /**
          * update a model instance
          * @param array $attributes
          * @param int $id
          * @return mixed
          * 
          */

         public function update(array $attributes, int $id);

         /**
          * Return all model rows
          * @param array $columns
          * @param string $orderBy
          * @param string $sortBy
          * @return mixed
          */

        public function all($columns = array('*'),string $orderBy = 'id', string $sortBy = 'desc');

        /**
         * find one by ID
         * @param int $id
         * @return mixed
         * 
         */

         public function find(int $id);

         /**
          * Find based on a different column
          * @param array $data 
          * @return mixed 
          */

          public function findOneorFail(int $id);

         /**
          *find based on a different column
          * @param array $data
          * @return mixed
          */

          public function findBy(array $data);

          /**
           * Find one based on a different column 
           * @param array $data
           * @return mixed
           * 
           */
          public function findOneBy(array $data);

          /**
           * find one based on a different column or through exception
           * @param array $data
           * @return mixed
           * 
           */

          public function findOneByOrFail(array $data);

          /**
           * Delete one by Id
           * @param int $id
           */

           public function delete(int $id);


 }