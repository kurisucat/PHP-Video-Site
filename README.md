# PHP-Video-Site

一个基于 PHP 的视频点播网站。 A video website based on PHP.

## 特点

-   贼 TM 小。
-   前后端分离
-   使用 DPlayer 播放器，可加载弹幕
-   自带站点留言板
-   带简介（比较原版 感谢 @MisaLiu）

## 安装

1. 下载本仓库最新的 [`Release`](https://github.com/KurisuCat/PHP-Video-Site/releases)，上传至服务器并解压
2. 将自带的示例数据库 `video.sql` 导入至你的数据库中
3. 将自带的伪静态规则 `Rewrite-Apache/Nginx.conf` 设置在你的服务器中
4. 在 `data/Config.php` 中设置站点数据库、管理面板账户等
5. 使用数据库工具设置你的站点相关数据
6. 完成！

## 谁在使用？

-   [SpaceVideoSite](https://spacevideosite.kurisu.run)

## 鸣谢

在这个程序中使用了以下几个项目：

-   [DIYgod / DPlayer](https://github.com/DIYgod/DPlayer)
-   [ThingEngineer / PHP-MySQLi-Database-Class](https://github.com/ThingEngineer/PHP-MySQLi-Database-Class)
-   [zdhxiong / mdui](https://github.com/zdhxiong/mdui)
-   [twbs / bootstrap](https://github.com/twbs/bootstrap)
-   [erusev / parsedown](https://github.com/erusev/parsedown)
-   [位于中国大陆的 七牛云 Gravatar 镜像](https://dn-qiniu-avatar.qbox.me/avatar/)
    > 在使用服务之前您需阅读并同意 _[七牛云](https://www.qiniu.com/)_ 的隐私政策。如果当地法律不允许您使用非本地的网络服务，请自行修改 `/template/board.php` 中 [第 9 行](https://github.com/MisaWorkGroup/Simple-PHP-Video-Station/blob/main/template/board.php#L9) 的 `//dn-qiniu-avatar.qbox.me/avatar/` 修改为其他的服务商。例如 `//gravatar.com/avatar/` 。
-   [And then, Based on **MisaWorkGroup / Simple-PHP-Video-Station**](https://github.com/MisaWorkGroup/Simple-PHP-Video-Station/)
