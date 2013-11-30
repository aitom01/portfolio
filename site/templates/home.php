<?php 

$content = "
	<div id='home'>
		<div class='summary'>
			<div class='container lead'>
				{$page->summary} 
			</div>
		</div>
		<div class='container'>
			{$page->body}";
if(count($page->images)){
	$content.="
		<div class='images'>
			<h3>{$page->images_title}</h3>
			<ul class='row'>";
	if(count($page->images)) foreach ($page->images as $image) {
	$content.="
				<li class='col-lg-2 col-sm-3 col-xs-6 {$sanitizer->pageName($image->description)}'><img src='{$image->url}' alt='{$image->description}' /></li>";
	}

$content.="
			</ul>
		</div>";
}
$content.= "
		</div>
	</div>";
