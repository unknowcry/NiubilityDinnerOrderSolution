# NiubilityDinnerOrderSolution
### 所有的数据上传都使用post 在其中加入一项option判断不同操作

建议debug环境git/github+vscode+wsl(windows子系统，推荐ubuntu18.04)安装php7.2+mysql

我们使用的库medoo可以无视mssql和mysql的区别 只需要多安装一个库


尽可能将php和html分开写

页面框架由html构建，内容用js填充，数据通过php中方法echo的json数据获取（这种方法不知道能不能完全不用在html里面嵌入php）

所有上传的数据都直接通过表单发送给postHoder.php 通过加入的option字段判断程序走向

### todo

用户登录时使用注册登录一体化，用户名密码正确则登录成功，显示该用户所有订单，用户名记录存在，密码错误，登录失败，用户名不存在，则创建新纪录（相当于注册新账户，但是有个提示的界面，以防用户写错用户名误创建新账号）

商家界面 我们需要一个包含上传文件功能的页面 同样使用post传输数据

订单分多个状态，订单页要标明订单状况，在适当的statue中显示对商家评价section



从php架构的角度来说 我们应该在postHolder中加一个设置本目录为server根目录的函数，在require过程中使用相对于server根目录的绝对路径比较方便 尤其是有文件夹参与的情况中，这个便利性尤其突出

## 中枢
所有的数据通过post发送给postHolder.php,在form中包含operate type等标记用做判断分支选择;因此postHolder.php可以看作是一个数据中枢。
页面中枢是personal.php 是用户登录以后显示的