$niz = [5,4,8,9,7,6,3,2,1];

function from_smaller_to_larger($array)
{
    for ( $i = 0;$i < sizeof($array); $i++) { //sizeof == count
        $min = $i;//$min=0
        for ($u = $i; $u < sizeof($array); $u++) {
            if ($array[$u] < $array[$min]){
                $min = $u;
            }
        }
        $tmp = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $tmp;
    }
    print_r($array);
}
from_smaller_to_larger($niz);
