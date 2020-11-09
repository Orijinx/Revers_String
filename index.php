<?php
function mb_strrev($string)
{
    $strrev = "";
    $buf_str = "";
    $simb = array(",", ".", "?", "!");
    $arr = explode(" ", $string);
    var_dump($arr);
    echo "<br>";
    foreach ($arr as $item) {
        $buf = str_split($item);
        echo"Split:";
        var_dump($buf);
        echo "<br>";
        foreach ($simb as $s) {
            if (in_array($s, $buf)) {
                $key = array_search($s, $buf);
                echo $key;
                echo "<br>";
                array_unshift($buf, $buf[$key]);
                var_dump($buf);
                echo "<br>";
                unset($buf[$key+1]);
                echo "Unset:";
                var_dump($buf);
                echo "<br>";
            }
        }
        $buf = array_reverse($buf);
        $buf_str .= implode($buf);
        $buf_str.=" ";
    }
    return $buf_str;
}

print(mb_strrev("Hello! Hi, stop"));
