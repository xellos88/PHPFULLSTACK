<?php
    //I am always Hello. Hello->Happy로 교환
    // $str = "I am always Hello.";
    // $arr_expl = explode(" ",$str);
    // print_r($arr_expl);
    // $arr[3]="happy";
    
    // $trans = array("Hello" => "Happy");
    // echo strtr("I am always Hello.",$trans)."\n";
    //strtr("문자열","변경할문자열","변경된 문자열")
    // echo strtr("I am always Hello.","Hello","Happy")."\n";
    // echo "\n";

    // $str = "I am always Hello.";
    // $search = 'Hello';
    // $replace = 'Happy';
    // $replaced_str = implode($replace, explode($search, $str, 2));
    // echo $replaced_str;

    // $str_all= "I am always Hello.";
    // $str_expl = explode("Hello",$str_all);
    // $str_impl = implode("Happy",$str_expl);
    // echo $str_impl;
    // var_dump($str_expl);
    
    
    
    //함수명: my_str_replace()
    //리턴값: string $result_str
    // $str = "I am always Hello.";
    // function my_str_replace($str){

    //     $str_expl = explode("Hello",$str);
    //     $result_str = implode("Happy",$str_expl);
    //     return $result_str;
    // }
    // echo my_str_replace($str);

    //재사용성 개선
    $str = "I am always Hello.";
    function my_str_replace($pram_str, $pram_separator, $pram_ch)
    {
        $arr_expl = explode($pram_separator, $pram_str);
        $result_str = implode($pram_ch, $arr_expl);
        return $result_str;
    }
    echo my_str_replace($str,"am","Apple")."\n";

    echo str_replace("Hello", "Happy",$str);
?>
