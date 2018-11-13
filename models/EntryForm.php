<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $Empresa;
    public $Razon_social;
    public $ruc;
    public $encargado;
    public $proyecto;
    public $titulo;
    public $fecha_Envio;
    public $descripcion_del_problema;
    public $verificar_codigo;
    public $sexo;


    public function rules()
    {
        return [
            [['Empresa', 'Razon_social','ruc','encargado','proyecto','titulo','fecha_Envio','descripcion_del_problema','verificar_codigo'], 'required'],
            ['ruc', 'number'],
            //['fecha_Envio', 'dd.MM.yyyy'],
        ];
    }
}