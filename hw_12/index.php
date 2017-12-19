<?php
echo '<meta charset="utf-8">';
$search_words = ['php','html','интернет','Web'];

$search_string = ['Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться неспосредственно в HTML'
];

function regularCheck($words,$string)
{
    $map = [];
    for ($i = 0; $i < count($string); $i++) {
        foreach ($words as $word) {
                if (preg_match("/$word/iu", $string[$i])) {
                    $map[] = $word;
                }
            }
        }

    return $map;
}
$arr[] = regularCheck($search_words,$search_string);
echo '<pre>';
print_r($arr);

print_r( regularCheck($search_words,$search_string));
print_r($search_string);