<?php

namespace App\controllers;

use Core\models\homeModels;

class homeControllers extends homeModels
{

    public function Index(): string
    {
        return 'Oldu bu iş';
    }

    public function homeAdd($data)
    {

       return $this->homeAddModels($data);

    }

}