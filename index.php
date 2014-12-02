<?php
	$page = 'home';
	require('inc/header.php');
?>
<p class="convo" id="conversation">Hey there, sorry you kinda caught me <br>
 working on my DeNiro impression...<br>
What do you mean it looks more like Blue Steel? <br>
Look, I'm not here to argue... what's you're name?</p>

<input type="text" id="name" value="Guess what goes here?">
<button id="convo_button" onclick="getName()">Next</button>

<script>
	//Gets the visitors name and changes conversation and image
	function getName(){
		var name = $('#name').val();
		console.log(name);
		//Dynamically changes the background
		$('#wrapper').css("background", "url(graphics/fredward.jpg) no-repeat center center");

		//Changes the conversation
		$("#conversation").html('That\'s weird, ' + name + ' is my maiden name. <br>You can call me Thomas or CodeSlinger for short.<br> I\'m a Full Stack Developer looking to make your life easier.<br>I take things from my head and make new internets. <br>Click Next to see more!');

		//Removes the input element
		$('#name').remove();

		//Changes the onclick event to a function called listSkills
		$('#convo_button').attr('onclick', 'listSkills()')
	}

	//Lists Skills and changes to next conversation
	function listSkills(){
		//Changes background
		$('#wrapper').css("background", "url(graphics/oddlook.jpg) no-repeat center center");

		//Changes the conversation
		$('#conversation').html('That\'s not creepy... anyhoo, I\'m an autodidact with an ever growing skillset.<br> My skills include:<br><br>GIT, OOP PHP, SQL, MYSQL, CSS3, SASS, FRONTEND FRAMEWORKS,<br>HTML5, JAVASCRIPT, JQUERY, AJAX, CHROME DEV TOOLS,<br>JSON, Bo Staff skills and I make a mean grilled cheese.<br>Currently learning, Ruby, Laravel, REST API Design, and much more.');

		//Changes the onclick event to a function called hire me
		$('#convo_button').attr('onclick', 'hireMe()');
	}

	//Next part in conversation
	function hireMe(){
		//Changes the background		
		$('#wrapper').css("background", "url(graphics/ugotme.jpg) no-repeat center center");

		//Changes the conversation
		$('#conversation').html('Why haven\'t you hired me? Beats me!<br> I don\'t want to toot my own horn but I\'m an awesome employee.<br> I\'m resourceful, kinda like MacGyver with a computer...<br>but I\'m not just a good googler(say that three times fast)<br>I challenge myself daily and seek improvement and novelty all of the time<br>Wanna know some backstory? Yes... yes you do.');
		
		//Changes onclick event to a function called backStory
		$('#convo_button').attr('onclick', 'backStory()');
	}

	//Adds some backstory
	function backStory(){

		//Changes the background		
		$('#wrapper').css("background", "url(graphics/whaaa.jpg) no-repeat center center");

		//Tells some backstory
		$('#conversation').html('Any good Superhero needs an origins story; here\'s mine. <br> Actually... besides me being a boxing instructor, my story is boring.<br>Here\'s what is important.<br>I woke up one day and decided I was not content with my life.<br>Coding gave me a new way to think and express myself.<br>I woke up, like a caveman discovering fire... ');
	
		//Changes onclick even to a function called followMe
		$('#convo_button').attr('onclick', 'followMe()');
	}

	//Tells about work asks to follow me
	function followMe(){

		//Changes the background		
		$('#wrapper').css("background", "url(graphics/imdaman.jpg) no-repeat center center");

		//Tells about work and where to follow
		$('#conversation').html('Since that time, I\'ve built a backend CMS in Object Oriented PHP and AJAX<br>for Kentucky\'s Local Boxing Committee, and a website for my boxing gym.<br>You can see these websites in the work section.<br>Also don\'t forget to follow my progress with the links above.');
		
		$('#convo_button').attr('onclick', 'offended()').html('Want me to Shut up?');
	}

	//Changes background and ends conversation
	function offended(){

		$('#wrapper').css("background", "url(graphics/iwonder.jpg) no-repeat center center");

		//Witty remark
		$('#conversation').html('I\'m not sure whether to be offended by that or not.<br>I\'m also very introspective. Did I mention that?<br>It\'s always Morgan Freeman doing the narrating though...');

		//Ends conversation
		$('#convo_button').attr('onclick', 'done()').html('Okay, this time it\'s for real');
	}

	//Refreshes the page
	function done(){
		window.location  = "index.php"
	}
</script>
<?php
	require('inc/footer.php');
?>