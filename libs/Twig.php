<?php
class MyTwig extends Twig_Extension{
    public function getName(){
        return 'MyTwig';
    }

    public function getFunctions(){
        $functions = [
            new Twig_SimpleFunction('pager','pager_function')
        ];
        return $functions;
    }

    public function getFilters(){
        $filters = [
            new Twig_SimpleFilter('redText', 'red_filter')
        ];
        return $filters;
    }
}


function red_filter($input){
    return '<span style="color: red;">' .$input . '</span>';
}

function pager_function($totalPage, $currentPage, $link){
        $start = 1;
        $end = 3;
        if($totalPage < 3) $end = $totalPage;
        if($currentPage > 3 && $totalPage > 5){
            $start = $currentPage - 2;
            $end = $currentPage + 2;
        }else{
            $end = $totalPage;
        }
        $html = '';

        if($totalPage > 1){
            $html .= '<ul class="pagination">';
            if($currentPage > 1){
                $html .= '<li><a href="'.str_replace('{p}', $currentPage - 1, $link) . '">&laquo;</a></li>';
            }
            for($i = $start; $i <= $end; $i++){
                if($currentPage == $i){
                    $html .= '<li class="active"><a href="#">' . $i . '</a></li>';
                }
                else{
                    $html .= '<li><a href=\"' .str_replace('{p}', $i, $link).'">' . $i . '</a></li>';
                }
            }

            if($currentPage != $totalPage){
                $html .= '<li><a href=\"'.str_replace('{p}', $currentPage + 1, $link) . '\">&laquo;</a></li>';
            }
            $html .= '</ul>';
        }
        echo $html;
}