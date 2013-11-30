<?php
$groups="";
$tabs="";
$count=0;
foreach ($page->children as $subpage) {
	$count++;
	$images="<div class='row'>\n";
	if(count($subpage->images)){
		foreach ($subpage->images as $image) {
			$img = $image->size(500,375,array('quality' => 95,'upscaling' => false,'cropping' => 'north'));
			$images.="
			<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
				<div class='thumbnail'>
					<a href='{$image->url}' class='image thumbnail'><img class='img-responsive' src='{$img->url}'  alt='{$img->description}' \></a>
					<div class='caption'>
						<a href='http://{$image->description}' target='_blank'>{$image->description}</a>
					</div>
				</div>
			</div>
		";
		}
	}
	$images.="</div>\n";

	$tabs.="<li><a href='#{$subpage->name}' data-toggle='tab'>{$subpage->title}</a></li>\n";

	$groups.="
	<div class='tab-pane fade";
	if($count==1) $groups.=" in active";
	$groups.="' id='{$subpage->name}'>
		<h2>{$subpage->title}</h2>
		<div>
		{$subpage->body}
		</div>
		{$images}
	</div>
	";

}

$content="
	<div id='{$page->name}'>
		<div class='summary'><div class='container lead'>
			{$page->summary} 
		</div></div>
		<div class='container'>
			<ul class='nav nav-tabs nav-justified' id='development'>
				{$tabs}
			</ul>
			<div class='tab-content'>
				{$groups}
			</div>
		</div>
	</div>
";

?>