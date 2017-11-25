--
-- Database: `bbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `classification`
--

CREATE TABLE IF NOT EXISTS `classification` (
  `Id` int(11) NOT NULL,
  `ClassificationName` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='分类';

--
-- 转存表中的数据 `classification`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '评论对应的用户id',
  `contents_id` int(11) NOT NULL DEFAULT '0' COMMENT '评论对应的帖子',
  `comment_str` varchar(255) NOT NULL DEFAULT '' COMMENT '评论内容',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '评论时间'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='评论';

--
-- 转存表中的数据 `comment`
--

-- --------------------------------------------------------

--
-- 表的结构 `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '帖子对应的用户',
  `classification` int(11) NOT NULL DEFAULT '0' COMMENT '文章分类',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '文章标题',
  `contents_str` text NOT NULL COMMENT '帖子内容',
  `img` varchar(255) DEFAULT NULL COMMENT '帖子图片',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `date` datetime NOT NULL COMMENT '发帖时间'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='帖子';


-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `UserPasswd` varchar(255) NOT NULL DEFAULT '' COMMENT '用户密码',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `UserJiBie` int(11) NOT NULL DEFAULT '0' COMMENT '0为普通用户1为管理员',
  `user_touxiang` varchar(255) DEFAULT NULL,
  `user_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '用户注册时间'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `user`
--


--
--

--
-- Indexes for table `classification`
--
ALTER TABLE `classification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classification`
--
ALTER TABLE `classification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

