<?php

namespace App\Traits;

    
/**
 * Trait FlashMessages
 * @package App\Traits
 */

trait FlashMessages

{
    //


    /**
     * @var array
     */

     protected $errorMessages = [

     ];

    /**
     * @var array
     */

     protected $successMessages = [

     ];

    /**
     * @var array
     */

     protected $infoMessages = [

     ];


    /**
     * @var array
     */

     protected $warningMessages = [

     ];


     /**
      * @param message

      *@param type
      */

      protected function setFlashMessage($message, $type){

        $model = 'infoMessages';

        switch ($type) {

            case 'info':
                $model = 'infoMessages';
                break;

            case 'error':
                $model = 'errorMessages';
                break;

            case 'success':
                $model = 'successMessages';
                break;

            case 'warning':
                $model = 'warningMessages';
                break;
            break;
        }

        if(is_array($message)){
            foreach($message as $key => $value){
                    array_push($this->$model, $value);
            }
        }
        else{
             array_push($this->$model, $message);
        }

      }

      protected function getFlashMessage(){
          return [
              'info'=> $this->infoMessages,
              'warning'=> $this->warningMessages,
              'success'=> $this->successMessages,
              'error'=> $this->errorMessages,

          ];
      }

      /**
        * Flushing flash messages to Laravel's session
      */
      protected function showFlashMessages(){

            session()->flash('error', $this->errorMessages);
            session()->flash('info', $this->infoMessages);
            session()->flash('success', $this->successMessages);
            session()->flash('warning', $this->warningMessages);
        }

}