<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\Users\wzzw\Desktop\git\VPS-IN~1\php\public/../app/index\view\index\edit.html";i:1512699451;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vps库存监控</title>
    <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="post" action="<?php echo url('index/index/savedata?'); ?>">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">套餐名</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control typeahead"  name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">服务商</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control typeahead company" data-provide="typeahead" name="companyname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">位置</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control typeahead place" placeholder="地理位置" data-provide="typeahead" name="placename">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">内存</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="RAM" name="ram">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">硬盘</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="硬盘大小" name="disk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">cpu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="cpu核心数" name="cpu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">ip4</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="ip4数量" name="ip4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">ip6</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="ip6数量" name="ip6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">虚拟化</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="虚拟化技术类型" name="frame">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">流量</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="月流量大小" name="flow">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">宽带</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="巅峰宽带M" name="bandwidth">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">年付</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="年付价格" name="yearly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">月付</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="月付价格" name="monthly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">购买链接</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Buy Url" name="buy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">库存链接</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="" name="vurl">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">验证函数(PHP语言)</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" style="height:170px;" name="vf">
if(strpos($str,"缺貨中")){
    return false;
}
return true;
                        </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">备注</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="remark"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.typeahead.company').typeahead({
                minLength: 0,//键入字数多少开始补全
                showHintOnFocus: "true",//将显示所有匹配项
                fitToElement: true,//选项框宽度与输入框一致
                items: "8",//提示数量上限
                autoSelect: true,
                source:["<?php echo $companyarr; ?>"]
            });
            $('.typeahead.place').typeahead({
                minLength: 0,//键入字数多少开始补全
                showHintOnFocus: "true",//将显示所有匹配项
                fitToElement: true,//选项框宽度与输入框一致
                items: "8",//提示数量上限
                autoSelect: true,
                source:["<?php echo $placearr; ?>"]
            });
        });

    </script>
</body>
</html>