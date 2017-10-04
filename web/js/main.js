var img = document.querySelector("img");

img.onclick = function() {
	var src = img.getAttribute("src");
	if (src === "../images/travel/facing_queenstown_ben_lommond.jpg") {
		img.setAttribute("src", "../images/travel/on_rocks_busan.jpg");
		img.setAttribute("alt", "Georgia standing near the rocks in the south of Busan");
		img.setAttribute("title", "Georgia standing near the rocks in the south of Busan");
	} else {
		img.setAttribute("src", "../images/travel/facing_queenstown_ben_lommond.jpg");
		img.setAttribute("alt", "Me standing towards Queenstown on the Ben Lommond Summit");
		img.setAttribute("title", "Me standing towards Queenstown on the Ben Lommond Summit");
	}
}