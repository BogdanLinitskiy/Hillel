<?php
echo '<meta charset="utf-8">';
$search_words = ['php','html','интернет','Web'];

$search_strings = ['Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться неспосредственно в HTML'
];

function regularCheck($words,$string)
{
    $map = [];
    for ($i = 0; $i < count($string); $i++) {
        foreach ($words as $word) {
            if (preg_match("/$word/iu", $string)) {
                $map[] = $word;
            }
        }
    }
    return $map;
}
$arrCounter=1;
for($i=0;$i<count($search_strings);$i++) {
    $result=regularCheck($search_words, $search_strings[$i]);
    echo "В предложении №$arrCounter есть слова: ";
    echo implode(", ",$result).".<br>";
    $arrCounter++;
}