<?php
use kartik\daterange\DateRangePicker;
?>

<br />
<div class="row">
    <div class="col-lg-2">
       <label class="control-label">起始时间:</label>
    </div>
    <div class="col-lg-6">
        <div class="input-group">
            <?php
            echo DateRangePicker::widget([
                'name'=>'date_range_for_monthly',
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
        <label class="control-label">monthsOfYear: </label>
    </div>
    <div class="col-lg-10">
        <div class="input-group">
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="1">01月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="2">02月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="4">03月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="8">04月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="16"> 05月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="32"> 06月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="64"> 07月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="128">08月</label>
            <br />
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="256">09月</label>
            <label class="checkbox-inline monthofYear"><input type="checkbox" value="512">10月</label>
           <label class="checkbox-inline monthofYear"><input type="checkbox" value="1024">11月</label>
           <label class="checkbox-inline monthofYear"><input type="checkbox" value="2048">12月</label>
        </div>
    </div>

</div>
<br />
<div class="row">
    <div class="col-lg-2">
        <label class="control-label">dayOfMonth:</label>
    </div>
    <div class="col-lg-10">
        <div class="input-group">
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="1">01号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="2">02号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="4">03号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="8">04号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="16">05号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="32">06号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="64">07号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="128">08号</label>
            <br />
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="256">09号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="512">10号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="1024">11号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="2048">12号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="4096">13号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="8192">14号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="16384">15号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="32768">16号</label>
            <br />
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="65536">17号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="131072">18号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="262144">19号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="524288">20号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="1048576">21号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="2097152">22号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="4194304">23号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="8388608">24号</label>
            <br />
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="16777216">25号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="33554432">26号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="67108864">27号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="134217728
">28号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="268435456">29号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="536870912">30号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="1073741824">31号</label>
            <label class="checkbox-inline dayofMonth"><input type="checkbox" value="2147483648">最后一天</label>
        </div>
    </div>

</div>
<br />
<br />
<div class="row">
    <div class="col-lg-11">
    </div>
    <div class="col-lg-1">
        <button type="button" class="btn btn-info" id="btn_monthly">添加</button>
    </div>
</div>

<br />
<br />


