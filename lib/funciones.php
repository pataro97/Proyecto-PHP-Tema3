<?php
    function generarDesplegable(){
        $desCat = [
            "Sobremesa",
            "Portatil",
            "Pantalla",
            "Impresora"
        ];
        return $desCat;
    }
   function generarTabla(){
    

    $tabla = 
    [
        [
            "Id" => "0",
            "Descripcion" => "Descripcion1",
            "Modelo" => "Modelo1",
            "Categoria" => "Portatil",
            "Unidades" => "20",
            "Precio" => "10€"
        ],
        [
            "Id" => "1",
            "Descripcion" => "Descripcion2",
            "Modelo" => "Modelo2",
            "Categoria" => "Sobremesa",
            "Unidades" => "30",
            "Precio" => "40€"
        ],
        [
            "Id" => "2",
            "Descripcion" => "Descripcion3",
            "Modelo" => "Modelo3",
            "Categoria" => "Pantalla",
            "Unidades" => "40",
            "Precio" => "20€"
        ],
        [
            "Id" => "3",
            "Descripcion" => "Descripcion4",
            "Modelo" => "Modelo4",
            "Categoria" => "Impresora",
            "Unidades" => "50",
            "Precio" => "33€"
        ]
    ];

    return $tabla;

}

function eliminar($tabla, $key){


        unset($tabla[$key]);
        $tabla = array_values ($tabla);
        return $tabla;
}

function actualizar ($tabla, $registro, $key ){
    $tabla[$key]=$registro;
    return $tabla;
}

function nuevo ($tabla, $nuevo){
    $tabla[]=$nuevo;
    return ($tabla);
}

function ordenar ($tabla, $campo){
    foreach($tabla as $key => $nuevo){
        $aux[$key] = $nuevo[$campo];
    }
    array_multisort($aux, SORT_DESC, $tabla);
    return ($tabla);
}


function filtrar ($tabla, $expresion){

   $aux= array();

   foreach($tabla as $key => $nuevo){
       if(in_array($expresion, $nuevo)){

           $aux[]=$nuevo;
       }
    }
    return($aux);
}
function ultimoId($tabla){
    $ultimo = end($tabla);
    return($ultimo['Id']);
}
?>
 