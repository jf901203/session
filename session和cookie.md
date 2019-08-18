##为什么需要session和cookie  记录请求的状态

1. 为了记录状态
2. web1.0时代 web应用只是用来实现静态资源共享
3. web2.0时代 web应用强调的是交互(登入) 但是http协议本身又是一种无状态协议 
4. 为了实现交互的效果 就需要记录请求的状态 session和cookie技术就随之产生


##session和cookie的特征

1. session和cookie都是由服务器生成的
2. session和cookie都是键值对  即session和cookie就是用来保存特定的值的一种技术
3. session是保存在服务器的 cookie是返回给客户端的
4. 一般来说，session的id是通过类似cookie的形式返回给客户端
5. 客户端(浏览器)会在发送请求的时候 自动将本地存活的cookie封装在信息头中发送给服务器
6. cookie和session都是有生命周期的
7. cookie的声明周期受到cookie自身的生命周期的以及客户端是否保留cookie文件的影响
8. session的生命周期受到session自身的存活周期以及客户端浏览器是否关闭的影响  浏览器关闭session就消失了
9. session和cookie都是由作用域的



##session id 会员卡号就是session id 银行卡号就是session id 身份证号就是 session id

##饭票就是 cookie 钱就是cookie



##为什么说cookie不安全

1. cookie是返回客户端 并且保存在客户端的
2. cookie的内容和工作原理就存在破解的可能性
3. 如果服务器不对cookie的有效做检查的话，则很容易产生安全问题
4. cookie文件保存在客户端的这个Microsoft\Windows\Temporary Internet Files临时文件夹中

##删除cookie

1. setcookie("test"," ",time()-1);
2. 在上述代码中，将cookie的过期时间设置到当前时间之前，则该cooki会自动


###php中的session_start()函数来启动session机制 就表示读取session文件或者创建session文件

1. 保存在服务器的这个phpStudy\tmp\tmp文件夹中


##session的操作在需要session的地方都需要session_start()读取服务器保存session文件


1. session_start(); // 读取服务器session文件
2. session_destroy(); // 销毁服务器session文件保存的内容

##为什么session相对于cookie更加安全呢？

1. 用户拿到的仅仅只是一个sessionID 和实际记录的状态值没有任何的关系
2. 这就意味着用户没有办通过sessionID去推测服务器是通过什么样的值 什么样的逻辑来实现状态的判断
3. 从而就没有办法去破解服务器的状态验证机制


##对于应用来说，要记录状态，其实不是说必须通过session或者cookie来实现的

1. 只需要能够在完成A操作的时候，产生一个记录状态的值，并且返回给客户端，然后再客户端再通过一定的技术(JS)来封装状态值到请求中，发送给服务器
2. 从而完成一个生成校验的过程即可
3. 因此，像token等技术 其实都是在session和cookie的基础上进行扩展而来的 校验机制更加安全而已