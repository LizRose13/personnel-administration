/**
 * Created by hp on 2016/12/1.
 */

//删除path路径下数据
function batchDelete(path) {
    if (select() == "delete") {
        obj = document.getElementsByName("check");
        var check_val ="";
        for (k in obj) {
            if (obj[k].checked)
                check_val += obj[k].value+" " ;

        }
//无法传递数组类型，所以拆违string 传递
        $.post(path,
            {data: check_val},
            function (data) {
                if(data==1){
                    alert('删除成功');
                    //刷新
                    location.reload();
                }else{

                    alert('删除失败，请先清空报名单位！');
                    location.reload();
                }

            }
        );

      // alert(check_val);
    }
}

//判断批处理选中情况
function select() {
    var result = $("#sel").val();
    return result;
}


