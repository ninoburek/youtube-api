
$(function() {
	//focus on query field at load page
	$("#query").focus();
});

$('.searchform').on('submit', function(e){  
		
		//prevent submiting form
		e.preventDefault();	
			
		//search for?
		var query = $('#query').val();
	
		//maxResults 
		var maxResults = $('#maxResults').val();
	
		//clear previous search result if any 
		$("#writediv").fadeOut("normal", function(){$(this).html('')});
		
			//after clearing 
			//ajax call to youtoube api
			  $.ajax({
				  type: "GET",
				  url: "https://www.googleapis.com/youtube/v3/search",
				  data: "part=snippet&maxResults="+maxResults+"&order=date&q="+query+"&key="+GoogleApiKey,
				  cache: false,
				  success: 
					function(results){
						//got results, let's go to another function for better control
						searchResults(results); 
					}
			  });
		
	 });
		  
		 
function searchResults(results){
	//parsing json response

	 var items = results.items; 

	if(items.length >0){ //check if there's any videos
	
		//videos found :)
		for (var i = 0; i < items.length; i++) {
			var videoid = items[i].id.videoId;
			var videotitle = items[i].snippet.title;
			var videodescription = items[i].snippet.description;
			var channelTitle = items[i].snippet.channelTitle;
			var videothumbnail = items[i].snippet.thumbnails.high.url; 

		//write results to output div
		$('#writediv').append( "<div class='row'>"

				+ "<div class='col-md-4'>"
				+ "<a href='https://www.youtube.com/watch?v=" + videoid + "' target='_blank'>"
				+ "<div class='img-holder'>"
				+ "<img src='" + videothumbnail + "' class='img-fluid' alt='" + videotitle + "' title='" + videotitle + "' /></a>"
				+ "</div>"			  
			+ "</div>"

			+ "<div class='col-md-8'>"	
				+ "<em><small>" + 	channelTitle + "</small></em>"		  
				+ "<h4><a href='https://www.youtube.com/watch?v=" + videoid + "' target='_blank'>" + videotitle + "</a></h4>" + videodescription 
			+ "</div>"
			+ "</div>");

		
		//now show search results
		$("#writediv").fadeIn("normal");

	}
		
		
	}else{
		//nothing found :( show alert
		$('#writediv').append( "<div class='alert alert-danger'>Nothing found :(</div>");
		$("#writediv").fadeIn("normal");
	}
}