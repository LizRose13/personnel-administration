<?php
/**
 * Created by PhpStorm.
 * User: LizYang
 * Date: 2016/12/1
 * Time: 20:52
 */

use Think\Page;

function testUtils(){
    echo "im utils";
}


/*
 * $project待分页的数据文件，已从相应数据库中选择提取出来
 * $expre描述单位的度量，“个项目”
 */
function setPage($project,$expre)
{
    import("ORG.util.Page"); // 加载分页助手类

    $total=$project->count();
    $num_per_page = 8; // 每页显示条数

    $page = new Page($total, $num_per_page);
    $limit = $page->firstRow . ',' . $page->listRows;
    $page->setConfig("header", "共" . $total . $expre);
    $page->setConfig('prev', '上一页');
    $page->setConfig('next', '下一页');
    $page->setConfig('last', '末页');
    $page->setConfig('first', '首页');
    $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    $show = $page->show();

    return array($limit,$show);
}

?>

