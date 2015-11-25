<?php
use kartik\daterange\DateRangePicker;
?>

<br />
<div class="row">
    <div class="col-lg-1">
       <label class="control-label">起始时间:</label>
    </div>
    <div class="col-lg-4">
        <div class="input-group">
            <?php
            echo DateRangePicker::widget([
                'name'=>'date_range_for_boot',
                'convertFormat'=>true,
                'language'=>'zh-CN',
                'useWithAddon'=>true,
                'pluginOptions'=>[
                    'locale'=>[
                        'format'=>'y-m-d',
                        'separator'=>' 到 ',
                    ],
                    'opens'=>'right'
                ]
            ]);
            ?>
        </div>
    </div>

</div>
<br />
<div class="row">
    <div class="col-lg-1">
        <label class="control-label">delay:</label>
    </div>
    <div class="col-lg-2">
        <div class="input-group">
            <input id="boot_delay" type="text" class="form-control" placeholder="启动后延迟秒数" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">s</span>
        </div>
    </div>

</div>
<br />
<br />
<div class="row">
    <div class="col-lg-11">
    </div>
    <div class="col-lg-1">
        <button type="button" class="btn btn-info" id="btn_boot">添加</button>
    </div>
</div>

<br />
<br />


