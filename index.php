<?php 
/*
Module Name:自定义论坛内页模板-小部件Demo
*/

//这个文件自动加载的，不需要引入
//论坛内页模板是指的帖子页面

//也就是说你可以用一个小部件模块开发多套论坛内页模板，不需要一个模块一个模板。

//=====这里的模板类型是挂载到论坛前台设置的，用户可以直接选择
$bbs_single_templates_arr['test1']='测试论坛内页模板1';
$bbs_single_templates_arr['test2']='测试论坛内页模板2';//如果你只开发一个类型的内页模板可以直接注释


//引入移动端的css和js、如果嫌懒，css也可以写在模板文件，但这样不太方便维护
if(wp_is_mobile()){
function jinsom_test_bbs_single_template_scripts(){//写模块的所有函数命名必须带上个人特色标记，以防和其他开发者的冲突了，或者自己先检查是否存在该函数，不存在再加载

//css-single-id必须是唯一的	
wp_enqueue_style('css-single-id',home_url().'/wp-content/module/public/gadget/jinsom-test-bbs-single-template/css/mobile.css',array(),'1.0');

//js-single-id必须是唯一的	最后一个false如果是true  那么这个js就是在页面底部引入，反之是在head加载
wp_enqueue_script('js-single-id',home_url().'/wp-content/module/public/gadget/jinsom-test-bbs-single-template/js/mobile.js',false,'1.0',true);


}
add_action('wp_enqueue_scripts','jinsom_test_bbs_single_template_scripts');
}


//这里可以写你的函数、比如设置选项、后端函数

//require('settings.php');比如单独新建一个文件引入作为设置文件


//require('functions.php');比如单独新建一个文件引入作为函数文件