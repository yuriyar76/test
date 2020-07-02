<?php
/**
  Сортировка прямая-обратная
 **/
class NewSort
{
private function new_sort(array $arr, $diff)
{
$c = count($arr);
while($c > 0){
if(empty($arr))break;
if($diff==='asc'){
$val = min($arr);
}elseif($diff==='desc'){
$val = max($arr);
}
foreach($arr as $key=>$value){
if($val===$value)
{
unset($arr[$key]);
}else{
continue;
}
}
$c--;
yield $val;
}
}
public static function getSort(array $arr, $diff="asc"){
foreach((new self)->new_sort($arr, $diff) as $value)
{
$arSort[] = $value;
}
(new self)->dump($arSort);
return $arSort;
}

private function dump($data){
          echo "<pre>";
            print_r($data);
          echo "</pre>";

}
}
$ars = ['F',2,9,'B',3,'s',50,80,"A",22,"a"];
$res = NewSort::getSort($ars, 'asc');