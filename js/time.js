function show(){
var date = new Date(); //日期对象
var now = "";
now = date.getFullYear()+"年"; //读英文就行了
now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
now = now + date.getDate()+"日";

if (date.getHours() < 10) {
now = now + "0"+ date.getHours()+":";
} else {
now = now + date.getHours()+":";
}
if (date.getMinutes() < 10) {
now = now + "0"+ date.getMinutes()+":";
} else {
now = now + date.getMinutes()+":";
}
if (date.getSeconds() < 10) {
now = now + "0"+ date.getSeconds()+" ";
} else {
now = now + date.getSeconds()+" ";
}

//获取星期
switch(date.getDay())
{
 case 0:
  now = now + "星期日";
  break;
 case 1:
  now = now + "星期一";
  break;
 case 2:
  now = now + "星期二";
  break;
 case 3:
  now = now + "星期三";
  break;
 case 4:
  now = now + "星期四";
  break;
 case 5:
  now = now + "星期五";
  break;
 case 6:
  now = now + "星期六";
  break;
}

document.getElementById("date").innerHTML = now; //div的html是now这个字符串
setTimeout("show()",1000); //设置过1000毫秒就是1秒，调用show方法
}