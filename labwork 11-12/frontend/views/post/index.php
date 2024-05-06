<?php
	//echo '<p>Hello World</p>';
	echo '<h1>Список статей</h1>';
	foreach($posts as $post): ?>
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title"><?= $post->title ?></h3>
	            <p>Категория: <?= $post->category->name ?></p>
	        </div>
	        <div class="panel-body">
	            <?= $post->excerpt ?>
	        </div>
	    </div>
	<?php endforeach; ?>
