<?php
include 'common.php';
if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
$relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
$url = urlencode($sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url);
$url = Typecho_Common::url('user/login', Helper::options()->index).'?from='.$url;
?>

<HTML>

<head>

    <meta HTTP-EQUIV="REFRESH" CONTENT="3; URL='<?php echo $url; ?>' ">

</head>

<body>

</body>
