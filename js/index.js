function display_languages() {
	var lan_dom = document.getElementById('languages');
	var lan_div = create_element('div', null, null, '', lan_dom);
	lan_div.style.textAlign = 'center';
	var lan_table = create_element('table', null, null, '', lan_div);
	lan_table.style.margin = '0 auto';
	var column = 2;
	for (var i = 0; i < language_list.length; i += column) {
		var tr = create_element('tr', null, null, '', lan_table);

		for (var j = 0; j < column; j++) {
			var td = create_element('td', null, null, '', tr);
			// td.style.cursor = 'pointer';

			var img = create_element('img', null, null, '', td);
			img.src = "images/flags/flags_iso/24/" + language_list[i+j].img + ".png";
			var td = create_element('td', language_list[i+j].code, null, language_list[i+j].text, tr);
			td.style.cursor = 'pointer';
			td.style.padding = '10px';
			if (j < column - 1) {
				td.style.paddingRight = '30px';
			}
			td.onmouseover = function() {
				this.style.color = 'green';
				this.style.fontWeight = 'bold';
			}
			td.onmouseout = function() {
				this.style.color = 'black';
				this.style.fontWeight = 'normal';
			}
			td.onclick = function() {
				window.open('homepage.php?lan='+this.id, '_self');
			}
		}
	}
}