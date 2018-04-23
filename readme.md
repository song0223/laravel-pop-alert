# laravel-pop-alert
laravel的flash消息插件有很多，但是不想很喜欢bootstrap的那种提示，所以自己稍微改造了下，加了个别的样式


用法：
```
composer require bacao/alert
```  
然后再app.php添加：
```
'providers' => [
    ...
    Bacao\Alert\AlertProvider::class
 ]
```
当然也可以添加：
```
'aliases' => [
    ...
    'Alert'=>Bacao\Alert\Alert::class
]
```
页面公共部分添加：
```
@include('bcalert::message')
```
最后执行：
```
php artisan vendor:publish --provider="Bacao\Alert\AlertProvider"
```
demo(四种样式可以选择):
```
user Bacao\Alert\Alert;
Alert::('success' ,'成功');
Alert::('error' ,'失败');
Alert::('info' ,'默认');
Alert::('warning' ,'警告');
```
最后！enjoy！  
![image](https://github.com/song0223/laravel-pop-alert/blob/master/%E6%BC%94%E7%A4%BA.gif)