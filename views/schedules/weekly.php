<?php
use kartik\daterange\DateRangePicker;
?>

<br />
<div class="row">
    <div class="col-lg-2">
       <label class="control-label">起始时间:</label>
    </div>
    <div class="col-lg-4">
        <div class="input-group">
            <?php
            echo DateRangePicker::widget([
                'name'=>'date_range_for_weekly',
                'convertFormat'=>true,
                'language'=>'zh-CN',
                'useWithAddon'=>true,
                'pluginOptions'=>[
                    'locale'=>[
                        'format'=>'Y-m-d',
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
    <div class="col-lg-2">
        <label class="control-label">weeksInterval:</label>
    </div>
    <div class="col-lg-2">
        <div class="input-group">
            <input id="weeksInterval" type="text" class="form-control" placeholder="每几周执行一次" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">周</span>
        </div>
    </div>

</div>
<br />
<div class="row">
    <div class="col-lg-2">
        <label class="control-label">dayOfWeek:</label>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="2">星期 1</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="4">星期 2</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="8">星期 3</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="16">星期 4</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="32">星期 5</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="64">星期 6</label>
            <label class="checkbox-inline dayofweek"><input type="checkbox" value="1">星期 日</label>
        </div>
    </div>
</div>
<br />
<br />
<div class="row">
    <div class="col-lg-11">
    </div>
    <div class="col-lg-1">
        <button type="button" class="btn btn-info" id="btn_weekly">添加</button>
    </div>
</div>

<br />
<br />


