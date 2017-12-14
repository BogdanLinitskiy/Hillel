<?php
echo '<meta charset="utf-8">';
$search_words = ['php','html','интернет','Web'];

$search_string = ['Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться неспосредственно в HTML'
];

function regularCheck($words,$string){
    foreach ($string as $value){
        foreach ($words as $word) {
            if(preg_match("/$word+/i",$value)){
               $text[] = $word;
            }
        }
    }
return $text;
}
print_r(regularCheck($search_words,$search_string));