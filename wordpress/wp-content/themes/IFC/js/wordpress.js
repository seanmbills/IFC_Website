async function getWordPressInfo() {
    // lists to keep track of various information from blog posts
	var titles = [];
	var contents = [];
	var dates = [];

    // this is the most important part of the function as it gets the actual content from the WordPress site
    // the "await" is absolutely necessary or else you'll end up jumping over this code before the HTTP
    // request being made here finishes and you'll end up with an empty list of posts
    // NOTE: await tells the JavaScript in runtime to wait for this entire method to finish
	await jQuery.get( "http://public-api.wordpress.com/rest/v1.1/sites/seanmbills213.wordpress.com/posts/?http_envelope=true&amp;number=10", function( response ) { 
		// response contains site information
		var body = response['body'];
		var found = parseInt(body['found']);
		posts = body['posts'];

        // iterate over all posts returned and add their title, contents, and dates created to the
        // respective lists above
		var i;
		for (i = 0; i < found; i++) {
			post = posts[i];
			//console.log(post);
			titles.push(post['title']);
			contents.push(post['content']);
			var date = new Date(post['date']);
			var newDate = date.toString('dd-MM-yy');
			dates.push(newDate);
		}
	});
    // set up the content for the blog div itself here
    // NOTE: need to come back and make each post into its own div with a popup functionality possible?
	var blogContent = "";
	for (var i = 0; i < titles.length; i++) {
		blogContent += "<p><strong>" + titles[i] + "</strong><br>";
		blogContent += contents[i];
		blogContent += "<br>Posted On: " + dates[i] + "<br><hr><br>";
	}
    // update the contents of the blog div on the home page
	//$("#blog").html(blogContent);
	return blogContent;
}