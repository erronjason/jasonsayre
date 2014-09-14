
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        if (isset($title)) {
            echo $title;
        }
        else {
            echo "Jason Sayre";
        } ?></title>
    <link rel="stylesheet" type="text/css" href="<?= ASSETS_DIR ?>/css/main.css">
</head>
<body>
<div id="wrapper">