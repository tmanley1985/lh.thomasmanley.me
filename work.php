<?php
	$page = 'work';
	require('inc/header.php');
?>
<img src="graphics/lookingdown.jpg">

<h3>Look what I did!</h3>

<div class="grid grid-pad">
	<div class="col-1-3">
		<a href=""><img class="circular" name="hopefully" id="hopefullyflip" onmouseover="flip(this)" onmouseleave="flipBack(this)" src="graphics/hopefully.jpg"></a>
	</div>

	<div class="col-1-3">
		<a href="https://github.com/tmanley1985/lh.kylbc.com"><img class="circular" name="kylbcscreenshot" id="kylbcflip" onmouseover="flip(this)" onmouseleave="flipBack(this)" src="graphics/kylbcscreenshot.jpg"></a>
	</div>

	<div class="col-1-3">
		<a href="http://www.throwdownboxingclub.com"><img class="circular" name="throwdownimage" id="throwdownimageflip" onmouseover="flip(this)" onmouseleave="flipBack(this)" src="graphics/throwdownimage.jpg"></a>

	</div>
</div>
<script>
	$('#wrapper').css({
		'background': 'white',
		'width': '80%',
		'height': 'auto'

	});

	function flip(element){

		//Grabs the source from the image
		var src = $(element).attr('src');
		//Grabs the id to use to grab the new image
		var id = $(element).attr('id');
		//Sets the new image source
		$(element).attr('src', 'graphics/' + id + '.jpg');

	}

	function flipBack(element){
		var image = $(element).attr('name');
		console.log(image);
		$(element).attr('src', 'graphics/' + image + '.jpg');
	}
</script>
<?php
	require('inc/footer.php');
?>