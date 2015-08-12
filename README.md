#[留言板](https://message-board.coding.io)

留言板基于用户之间的留言，进行增删改查，实现用户之间有效沟通。
###　　　　　　　　　　　           　Author:Changhe
###　　　　　　　　　           E-mail:929364730@qq.com

##目录

- [设计背景](#backgound)
- [采用技术](#technic)
- [设计思路](#design)
- [目录结构](#content)
- [实现功能](#realized)
- [改进建议](#suggestion)

##<span id="background">设计背景</span>

学习PHP时，用smarty实现前台和后台代码的分离，达到MVC
留言信息在现在变得越来越有意思，帮助用户进行留言管理时间十分有趣的事情，仅供娱乐和学习。

##<span id="technic">采用技术</span>

PHP实现后台
MySql存储数据
Smarty+html+css+javascript实现前台代码

##<span id="design">设计思路</span>

采用MVC的模式，M(用PHP实现底层接口),V(PHP通过调用底层接口实现数据处理并实现跳转),C(收集数据)


##<span id="content" >目录结构</span>

```
message-board/
├── model/
│   ├── db/
│   ├── user/
│   └── message/
├── samrty/
│   ├── libs/
│   └── templates/
└── controller/
    ├── login/
    ├── message/
    └── register/ 
```

##<span id="realized" >实现功能</span>

1. 用户的正常登陆，注销以及登陆不成功的反馈
2. 查看收到的，发送的留言
3. 删除，发送，留言并返回到处理前的页面
4. 验证码功能
5. 分页功能,跳转某一页
6. 注册新用户
7. 用session实现未登录不能访问其他页面（login.php）

##<span id="suggestion">改进建议</span>

1. 在合适的位置显示当前用户的用户名（昵称）
2. 加入一个登陆后的主页面
3. 采用类QQ邮箱界面进行优化
4. 改进数据库的主外键约束
5. 注册业务有缺陷，确定注册使用的字段=>登陆字段
6. 对页面进行优化，用css，js，ajax等
7. 加入群发功能
