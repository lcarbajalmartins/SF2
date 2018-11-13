<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Empresa;

class EmpresaController extends Controller
{
    public function actionIndex()
    {
        $query = Empresa::find();

        $pagination = new Pagination([
            'defaultPageSize' => 4,//mostrar cantidad por paginas
            'totalCount' => $query->count(),
        ]);

        $Empresa = $query->orderBy('empresa')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'Empresa' => $Empresa,
            'pagination' => $pagination,
        ]);
    }
}