<?php namespace App\Models ;


use codeIginter\Model;
class clienteModel extends Model
{
//representacion de la tbl cliente 

        protected $table         ='cliente';
        protected $primaryKey    ='id';
//el modelo me retorne los resuktados del mapeo de la tabla como un arreglo, de manera estandar.resulktados  en array
        protected $returnType    ='array';

//es el arreglo de variables que seran permitidos para que  esean manejados por codeigniter 
                   protected $allowedFields ='nombre','apellido','telefono','correo';
               
                protected $useTimestamps =true;
                protected $createdField  ='created_at';
                protected $updateField  ='created_at';

                //validacion del modelo, las valiidaciones desntro del un arreglo, loq ue va son las reglas de codeigniter
                protected $validationRules  =[
//reglas
                                                'nombre'     =>'required|alpha_space|min_length[3]max_length[75]',
                                                'apellido'   =>'required|alpha_space|min_length[3]max_length[75]',
                                                'telefono'   =>'required|alpha_space|min_length[8]max_length[8]',
                                                'correo'     =>'permit_empty|valid_email|max_length[85]',



                ];
                protected $validationMessages =[
//quiero hacer un m,sg especial para wl camp correo ,y para msga le pasamos otro RRGELO"
                        'correo'  => [

                                'valid_email' =>'Estimado usuario, debe ingresar un eamil válido'
                        ]
                ];

                                protected $skipValidation=false;
                                





}