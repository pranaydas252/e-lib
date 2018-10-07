function bookSearch(){
	var search = document.getElementById('search').value
	document.getElementById('results').innerHTML = ""
	console.log(search)

	$.ajax({
		url: "https://www.googleapis.com/books/v1/volumes?q=" + search,
		dataType: "json",

		success: function(data){
			results.innerHTML += "<p class='head'>We've found <span class='color'> " + data.totalItems + " </span> matching results</p><br>"
			for(i=0;i<data.items.length;i++){
				results.innerHTML += "<div class='col-lg-3 card'><h4>" + data.items[i].volumeInfo.title + '</h4><br><h5>By: '
				+ data.items[i].volumeInfo.authors + '</h5><br><img class="thumb" src=' + data.items[i].volumeInfo.imageLinks.thumbnail +'><br><a href='+ data.items[i].volumeInfo.infoLink +' target="_blank"><button class="more" type="button"><span class="fa fa-book">&nbsp;&nbsp;&nbsp;Read More</span></button></div'
			}
		},

		type: 'GET'
	});
}

document.getElementById('button').addEventListener('click', bookSearch, false)