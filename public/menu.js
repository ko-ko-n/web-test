
function openbox(market) {
	display = document.getElementById('market').style.display;
	if(display == "none") {
		document.getElementById('market').style.display = "block";
	} else {
		document.getElementById('market').style.display = "none";
	}
}

function openbox(market_close) {
	display = document.getElementById('market').style.display;
	if(display == "block") {
		document.getElementById('market').style.display = "none";
	} else {
		document.getElementById('market').style.display = "block";
	}
}

function openbox_2(home) {
	display = document.getElementById('home').style.display;
	if(display == "none") {
		document.getElementById('home').style.display = "block";
	} else {
		document.getElementById('home').style.display = "none";
	}
}
