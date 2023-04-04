<?php
        $arr_ass_del= array("된장찌개"=> "파"
                ,"볶음밥" =>"양파"
                ,"삭제" => "값값"
                ,"김치" => "마늘"
                ,"비빔밥" => "참기름");
                foreach($arr_ass_del as $key => $val);
                if($key="삭제") {
                        unset($arr_ass_del["삭제"]);
                }
                else{
                        echo $key." : ". $val."\n";
                };
?>