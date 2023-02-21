# text-api
一个简单的基于PHP的随机文本api

## 原理
首先将“hitokoto.txt”中的每一行读取到一个数组中。接着，使用```array_rand()```函数从数组中随机选择一行，并将其打印出来作为API的返回值。

## 如何使用？
你可以将“hitokoto.txt”中替换为你自己的文本，每行一句，我这里原本是三体的名言名句。
然后，将所有文件上传至服务器，访问你的网站即可。

## 效果
![image](https://cdn.staticaly.com/gh/rong6/Image_hosting_service@main/image.21l3bc55164g.webp)
