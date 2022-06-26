//移动端js


//打开内页执行的js
myApp.onPageBeforeInit('post-single',function(page){
post_id=page.query['post_id'];//帖子对应的文章ID
type=page.query['type'];//如果这个值为bbs，那么打开的就是帖子页面

if(type=='bbs'){

//执行你的逻辑
console.log('打开帖子内页了，监听成功！');

}


})