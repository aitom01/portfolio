<?php
$groups="";
$tabs="";
$count=0;
foreach ($page->children("include=hidden") as $subpage) {	
	$images="
		<div class='images' id='{$subpage->name}-images'>
		<div class='row' >";
	if(count($subpage->images)){
		foreach ($subpage->images as $image) {
			$img = $image->size(500,375,array('quality' => 95,'upscaling' => false,'cropping' => 'north'));
			$caption= "<span>{$image->description}</span>";
			if(substr($image->description, 0,3)=="www") $caption= "<a href='http://{$image->description}' target='_blank'>{$image->description}</a>";
			$images.="
			<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
				<div class='thumbnail center-block'>
					<a title='{$image->description}' href='{$image->url}' class='fancybox image thumbnail' data-fancybox-group='{$subpage->id}' target='_blank'><img class='img-responsive' src='{$img->url}'  alt='{$image->description}' /></a>
					<div class='caption'>{$caption}</div>
				</div>
			</div>";
			$count++;
		}
	}
	$images.="
		</div>
		</div>";
	if(count($subpage->images)>4) 
		$images.="
		<button class='btn btn-default center-block show_more' rel='{$subpage->name}-images' >Show more</button>";

	$tabs.="
				<a href='#{$subpage->name}'>
					<h3>{$subpage->headline} <small>{$subpage->keywords}</small></h3>
				</a>";
	$groups.="
				<div class='clearfix' id='{$subpage->name}'>
					<h2>{$subpage->headline}</h2>
					{$subpage->body}
					{$images}
				</div>";
}

$content="
	<div id='{$page->name}'>
		<div class='summary'>
		<div class='container lead'>
			{$page->summary}
			<div id='devtabs'>{$tabs}
			</div>
		</div>
		</div>
		<div class='container'>
			<div>{$groups}
			</div>
		</div>
	</div>";
