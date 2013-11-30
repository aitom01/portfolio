<?php
$files = "";
if(count($page->images)){
	$files.="
		<div class='images'>
			<h3>{$page->images_title}</h3>
			<ul class='row'>";
	foreach ($page->images as $image) {
		$files.="
				<li class='col-lg-2 col-sm-3 col-xs-12 {$sanitizer->pageName($image->description)}'><img src='{$image->url}' title='{$image->description}' alt='{$image->description}' /></li>";
	}
	$files.="
			</ul>
		</div>";
}

$content="
	<div id='{$page->name}'>
		<div class='summary'>
			<div class='container lead'>
				{$page->summary} 
			</div>
		</div>
		<div class='container'>
			{$page->body}{$files}
		</div>
	</div>";
