# Strip Comment Author URL on Approval  
**评论审核通过时清除作者网址**

[![WordPress](https://img.shields.io/badge/WordPress-6.9%2B-blue.svg)](https://wordpress.org/)
[![License](https://img.shields.io/badge/License-GPL_v2%2B-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

---

## English

This is a lightweight WordPress plugin that **automatically clears the comment author's URL** when the administrator approves a comment.

When a malicious visitor leaves a comment with a harmful website address, the plugin ensures that after approval, the link is completely removed. This prevents normal visitors from accidentally clicking on dangerous URLs displayed under the commenter's name.

> **Note**: The original URL is still saved in the database for auditing purposes, but it will no longer appear as a clickable link on the frontend.

### Features
- Only triggers when a comment status changes to **approved**
- Works with both single and bulk approval
- Extremely lightweight (single file, no settings page)
- Fully compatible with WordPress 6.9+ (and future versions)

### Installation
1. Download the latest release or clone this repository.
2. Upload the `strip-comment-author-url` folder to `/wp-content/plugins/`.
3. Activate the plugin in **Plugins → Installed Plugins**.

### Screenshots
![Plugin Screenshot](https://github.com/JohnGuoy/strip-comment-author-url/blob/main/assets/1.jpg)

### Usage
No configuration needed! Activate and it works immediately.

### License
Released under **GPL v2 or later**. You are free to use, modify, and distribute it.

### Feedback & Bug Reports
If you have any feedback, suggestions, or bug reports, please leave a comment on my WordPress blog post:  
**https://www.zuotijia.me/strip-comment-author-url/**

Thank you for using this plugin!

---

## 中文

这是一个轻量级 WordPress 插件，功能是：**评论审核通过时清除作者网址**。

当管理员审核通过评论时，自动清除评论者的网站地址，防止恶意访客留下的恶意链接被正常访客点击。

> **注意**：原始网址仍保存在数据库中（便于后期审计），但前台页面不再显示为可点击链接。

### 特性
- 仅在评论状态变为「已审核」时触发
- 支持单个审核和批量审核
- 极致轻量（单文件，无设置页面）
- 完美兼容 WordPress 6.9+ 及未来版本

### 安装方法
1. 下载最新版本或克隆本仓库。
2. 将 `strip-comment-author-url` 文件夹上传到站点目录 `/wp-content/plugins/`。
3. 在 WordPress 后台「插件 → 已安装插件」中激活。

### 截图
![插件截图](https://github.com/JohnGuoy/strip-comment-author-url/blob/main/assets/1.jpg)

### 使用方法
无需任何设置！激活插件后立即生效。

### 协议
本插件基于 **GPL v2 or later** 协议发布，你可以免费使用、修改和分发。

### 反馈与 Bug 报告
如有任何反馈、建议或 Bug 报告，请在我的 WordPress 博客文章中留言：  
**https://www.zuotijia.me/strip-comment-author-url/**

感谢使用本插件！

---

**Made with ❤️ for the WordPress community**  
**为 WordPress 社区用心打造**
