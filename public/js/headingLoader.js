function getPageName() {
	var uri = window.location.href; 
	uriSplit = uri.split("/");
	return uriSplit[uriSplit.length-1];
}

function ChangeTabName () {
	var $newTabName = getPageName();
	var $index =0;
	switch ( $newTabName ) {
		case 'aboutUs' : $index =1;
				break;
		case 'services' : $index =2;
				break;
		case 'products' : $index =3;
				break;
		case 'gallery' : $index =4;
				break;
		case 'contactUs' : $index =5;
				break;
		default:
			$index =0;			
	}
	var $listOfTabs = document.getElementById("tabs").children;
	$listOfTabs[$index].classList.add('active');
}