<div class="breadcrumb">
    <ul>
        <li><a href="/index.php">Accueil</a></li>
        <?php if(isset($section)): ?>
            <li><a href="/pages/<?php echo $section; ?>.php"><?php echo $section; ?></a></li>
        <?php endif; ?>
        <?php if(isset($page)): ?>
            <li><?php echo $page; ?></li>
        <?php endif; ?>
    </ul>
</div> 