<?php
function createSelect($name,$value = null, $options, $attribs = array()){
    $strAttribs = '';
    if(count($attribs)>0){
        foreach ($attribs as $keyAttribs => $valueAttribs){
            $strAttribs .= $keyAttribs . '="' . $valueAttribs .'" ';
        }
    }

    $xhtml = '<select name="' . $name . '" id="' . $name . '" ' . $strAttribs . ' >';
    $xhtml .= '<option value="0" selected="selected">Là danh mục cha</option>';
    
    if(count($options) > 0) {
        foreach ($options as $key=> $info){
        $strSelect = '';
        if($info['cate_id'] == $value) {
            $strSelect = 'selected="selected"';
        }

        if($info['level'] == 1){
            $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>+ ' . $info['cate_name'] . '</option>';
        } else {
            $string = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            $newString = '';

            for($i=1; $i< $info['level']; $i++){
                $newString .= $string;
            }

            $info['name'] = $newString . '-' . $info['cate_name'];
            $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>' . 
               $newString . ' - ' . $info['cate_name'] . '</option>';
        }
       }
    }

    $xhtml .= '</select>';
    return $xhtml;
}


function createSelectForProduct($name,$value = null, $options, $attribs = array()){
    $strAttribs = '';
    if(count($attribs)>0){
        foreach ($attribs as $keyAttribs => $valueAttribs){
            $strAttribs .= $keyAttribs . '="' . $valueAttribs .'" ';
        }
    }

    $xhtml = '<select name="' . $name . '" id="' . $name . '" ' . $strAttribs . ' >';
    $xhtml .= '<option value="" selected="selected">Vui lòng chọn danh mục</option>';
    
    if(count($options) > 0) {
        foreach ($options as $key=> $info){
        $strSelect = '';
        if($info['cate_id'] == $value) {
            $strSelect = 'selected="selected"';
        }

        if($info['level'] == 1){
            $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>+ ' . $info['cate_name'] . '</option>';
        } else {
            $string = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            $newString = '';

            for($i=1; $i< $info['level']; $i++){
                $newString .= $string;
            }

            $info['name'] = $newString . '-' . $info['cate_name'];
            $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>' . 
               $newString . ' - ' . $info['cate_name'] . '</option>';
        }
       }
    }
    
    $xhtml .= '</select>';
    return $xhtml;
}

function createSelectProductCustomer($name, $value = null, $options, $attribs = array()){
    $strAttribs = '';
    if(count($attribs)>0){
        foreach ($attribs as $keyAttribs => $valueAttribs){
            $strAttribs .= $keyAttribs . '="' . $valueAttribs .'" ';
        }
    }

    $xhtml = '<select name="' . $name . '" id="' . $name . '" ' . $strAttribs . ' >';
    $xhtml .= '<option value="" selected="selected">Vui lòng chọn danh mục sản phẩm</option>';
    
    if(count($options) > 0) {
        foreach ($options as $key=> $info) {
            $strSelect = '';

            if (in_array($info['cate_id'], $value)) {
                $strSelect = 'selected="selected"';
            }

            if($info['level'] == 1){
                $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>+ ' . $info['cate_name'] . '</option>';
            } else {
                $string = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                $newString = '';

                for($i=1; $i< $info['level']; $i++){
                    $newString .= $string;
                }

                $info['name'] = $newString . '-' . $info['cate_name'];
                $xhtml .= '<option value="' . $info['cate_id'] . '" ' . $strSelect . '>' . 
                   $newString . ' - ' . $info['cate_name'] . '</option>';
            }
       }
    }
    
    $xhtml .= '</select>';
    return $xhtml;
}