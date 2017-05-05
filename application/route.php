<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '[wo]'       => [
        ':id'  =>['index/name',['method'=>'get'],['id'=>'\d+']],
        ':name' =>['index/hello',['method'=>'post']],
    ],
    '[moodwrite/mymoodnode]'=>[
        ':delete'=>['moodNode/controller/MoodNode.php/delete',['method'=>'post'],['delete'=>'delete']],
        ':edit'=>['MoodNode/edit',['method'=>'post'],['edit'=>'update']],
        ':publish'=>['MoodNode/publish',['method'=>'post'],['publish'=>'publish']],
    ],
    '[moodwrite/mymooddiary]'=>[
        ':delete'=>['MoodDiary/delete',['method'=>'post'],['delete'=>'delete']],
        ':edit'=>['MoodDiary/update',['method'=>'post'],['edit'=>'update']],
        ':publish'=>['MoodDiary/publish',['method'=>'post'],['publish'=>'publish']],
    ],
    '[moodwrite/mymooddraft]'=>[
        ':edit'=>['MoodDraft/update',['method'=>'post'],['edit'=>'update']],
        ':delete'=>['MoodDraft/delete',['method'=>'post'],['delete'=>'delete']],
    ],
    '[moodwrite/mymoodpublished]'=>[
        ':edit'=>['MoodPublished/update',['method'=>'post'],['edit'=>'update']],
        ':delete'=>['MoodPublished/delete',['method'=>'post'],['delete'=>'delete']],
        ':cancel'=>['MoodPublished/cancel',['method'=>'post'],['cancel'=>'cancel']],
    ],
    '[mooddiscuss/mymoodgroup]'=>[
        ':remark'=>['MoodDiscuss/remark',['method'=>'post'],['remark'=>'remark']],
        ':delete'=>['MoodDiscuss/delete',['method'=>'post'],['delete'=>'delete']],
    ],
    '[moodinformation/mymoodgroupinformation]'=>[
        ':exit'=>['MoodGroup/exit',['method'=>'post'],['exit'=>'exit']],
    ],
     '[moodinformation/mymoodfriendinformation]'=>[
        ':delete'=>['MoodGroup/delete',['method'=>'post'],['delete'=>'delete']],
    ],
     '[moodinformation/mymoodcomman]'=>[
        ':info'=>['MoodGroup/info',['method'=>'get'],['info'=>'info']],
    ],
];
