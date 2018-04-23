# laravel-pop-alert
laravel的flash消息插件有很多，但是不想很喜欢bootstrap的那种提示，所以自己稍微改造了下，加了个别的样式


用法：
```
 composer require "bacao/alert":"1.0"
```  
然后再app.php添加：
```
'providers' => [
    ...
    Bacao\Alert\AlertProvider::class,
 ]
```
当然也可以：
```
'aliases' => [
    'Alert'=>Bacao\Alert\Alert::class
]
```