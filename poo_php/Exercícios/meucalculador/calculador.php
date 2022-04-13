<?php
    class Calculador{
        //Calculador Binario
        public function calcularDecimalBinario($decimal){
            if($decimal==0){
                echo "0";
            }else{
            for($i=0;$decimal>=1;$i++){
                $resultado[$i]=$decimal%2;
                $decimal/=2;
            }
            echo"<p>";
            for($s=$i-1;$s>=0;$s--){
                echo "$resultado[$s]";
            }
            echo"</p>";
            }
        }
        //Calculador decimal
        public function calcularBinarioDecimal($binario){
            $binario=str_split($binario);
            $res=0;
            $p=0;
            for($i=count($binario)-1;$i>=0;$i--){
                if($binario[$i]==1){
                    $res+=$binario[$i]*pow(2,$p);
                }
                $p++;
            }
            echo "$res";
        }
        //Calculador hexadecimal
        public function calcularDecimalHexadecimal($decimal){
            if($decimal==0){
                echo "0";
            }else{
                for($i=0;$decimal>=1;$i++){
                    $resultado[$i]=$decimal%16;
                    $decimal/=16;
                }
                //conversor de número para letra
                for($s=count($resultado)-1;$s>=0;$s--){
                    switch($resultado[$s]){
                        case 10 :echo "A"; break;
                        case 11 :echo "B"; break;
                        case 12 :echo "C"; break;
                        case 13 :echo "D"; break;
                        case 14 :echo "E"; break;
                        case 15 :echo "F"; break;
                        default :echo "$resultado[$s]";
                    }
                }
            }
        }
        public function calcularHexadecimalDecimal($hexadecimal){
            $hexadecimal=str_split($hexadecimal);
            $resultado=0;$p=0;
            
            for($i=count($hexadecimal)-1;$i>=0;$i--){
                //conversor de letras em número
                switch($hexadecimal[$i]){
                    case "A" :$hexadecimal[$i]=10;break;
                    case "B" :$hexadecimal[$i]=11;break;
                    case "C" :$hexadecimal[$i]=12;break;
                    case "D" :$hexadecimal[$i]=13;break;
                    case "E" :$hexadecimal[$i]=14;break;
                    case "F" :$hexadecimal[$i]=15;break;
                    case "a" :$hexadecimal[$i]=10;break;
                    case "b" :$hexadecimal[$i]=11;break;
                    case "c" :$hexadecimal[$i]=12;break;
                    case "d" :$hexadecimal[$i]=13;break;
                    case "e" :$hexadecimal[$i]=14;break;
                    case "f" :$hexadecimal[$i]=15;break;
                }
                //calculdor
                if($hexadecimal[$i]!=0){
                    $resultado+=$hexadecimal[$i]*pow(16,$p);
                }
                $p++;
            }
            echo "$resultado";
        }
        public function calcularDecimalOctal($decimal){
            if($decimal==0){
                echo "0";
            }else{
            for($i=0;$decimal>=1;$i++){
                $resultado[$i]=$decimal%8;
                $decimal/=8;
            }
            for($s=$i-1;$s>=0;$s--){
                echo "$resultado[$s]";
            }
            }
        }
        public function calcularOctalDecimal($binario){
            $binario=str_split($binario);
            $res=0;
            $p=0;
            for($i=count($binario)-1;$i>=0;$i--){
                if($binario[$i]!=0){
                    $res+=$binario[$i]*pow(8,$p);
                }
                $p++;
            }
            echo "$res";
        }
    }
?>