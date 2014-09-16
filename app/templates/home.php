<?php include PARTIALS_DIR.'/header.php'; ?>
<div id="wrapper">
    <div id="content">

        <div id="main">
            <h1><?php if ($headercontent) echo $headercontent; ?></h1>
            <?php if ($content) echo $content; ?>
        </div>
    </div>
<?php include PARTIALS_DIR.'/footer.php'; ?>
