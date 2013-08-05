function iframeFitHeight(id,offset){
	var S = KISSY,
		$ = S.all,
		$ifr = $(id),
		offset = offset || 0;

	if($ifr[0] && $ifr[0].contentWindow.document.body){
		S.log($ifr[0].contentWindow.document.body.scrollHeight + offset)
		// $ifr.height($ifr[0].contentWindow.document.body.scrollHeight + offset);
	}
}