<?php 

//Arrays


$data = ['Guilherme','Maria','João','Acido Cubroso', 34, true];

//Coloca elementos no começo do Array, sem remove o item que já estava no começo
array_unshift($data, 'first');

//Comando que conta quantos elementos tem no array e coloca mais um no ultimo
$lenght = count($data);

//comando para adicionar mais itens no Array
$data[6] = 'last';

//Também adiona um valor no final do Array
array_push($data, 'teste');



//Array Multidimencional

//Esse é um tipo de array que pode ser feito dentro de outros Arrays.
//Assim pode ser feita a formatação desse tipo de Array, colocando cada um em uma linha a baixo.
$person = [ 
            'nome' => 'Guilherme', 'age' => 17, 
                'documents' => ['cpf' => '347982374823', 'RG' => '123213123123', 
                'array' => ['MEU ZOVO' => 'Tenho Two Balls']
                    ]
          ];

var_dump($person['documents']['array']);
