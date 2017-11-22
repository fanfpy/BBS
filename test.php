
<?php
$string='[b]为你写诗[/b]
[i]为你做不可能事[/i]
[u]哎呀，哥不是写情诗[/u]
[color=Red]哥是在说歌词[/color]
[size=7]吴克群[/size]
[qq]1378353651[/qq]';

//匹配UBB字符
$pattern=array(
	'/\[b\](.*)\[\/b\]/i',
	'/\[i\](.*)\[\/i\]/iU',
	'/\[u\](.*?)\[\/u\]/i',
	'/\[color=(.*?)\](.*?)\[\/color\]/',
	'/\[size=(\d)\](.*?)\[\/size\]/',
	'/\[qq\](\d{5,12})\[\/qq\]/',
	
	);

//需要替换的UBB字符
$replace=array(
	'<b>\\1</b><br />',
	'<i>\\1</i><br />',
	'<u>\\1</u><br />',
	'<font color="\\1">\\2</font><br />',
	'<font size="\\1">\\2</font><br />',
	'<a href="http://wpa.qq.com/msgrd?V=1&Uin=\\1&amp;Site=[Discuz!]&amp;Menu=yes"
 target="_blank"><img src="http://wpa.qq.com/pa?p=1:\\1:1" border="0"></a>',
	);

//使用正则匹配$string，将$string当中的值变为$replace的效果
$ubb=preg_replace($pattern,$replace,$string);

echo $ubb;