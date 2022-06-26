<?php 

get_header();//引入主题自带的头部、不需要就不引人
?>
<!-- 电脑端的这个页面可以直接引入js文件和css文件 -->
<link rel="stylesheet" type="text/css" href="<?php echo home_url();?>/wp-content/module/public/gadget/jinsom-test-bbs-single-template/css/pc.css">
<script type="text/javascript" src="<?php echo home_url();?>/wp-content/module/public/gadget/jinsom-test-bbs-single-template/js/pc.js"></script>

<?php 
//因为一些基本的参数在前面文件主题已经加载好了，不需要重新查询，可以直接用，直接写你的页面模板逻辑即可


echo '当前模板类型：'.$bbs_type.'</br>';//你可以根据这个值判断，不同类型输出不一样的模板
echo '当前用户ID是：'.$user_id.'</br>';//如果$user_id为0，则用户没有登录
echo '文章ID是：'.$post_id.'</br>';
echo '当前文章的作者ID是：'.$author_id.'</br>';
echo '当前论坛ID是：'.$bbs_id.'</br>';
echo '当前论坛的子论坛ID是：'.$child_bbs_id.'</br>';//如果$child_bbs_id等于$bbs_id 那么说明当前论坛没有子论坛

if($bbs_type=='test1'){
echo '这里是测试模板1的电脑端界面';
}else if($bbs_type=='test2'){
echo '这里是测试模板2的电脑端界面';	
}

//这里是页面的各种逻辑了，随便你发挥了


//get_footer();//引入主题自带的底部、不需要就不引人
