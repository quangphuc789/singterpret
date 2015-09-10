function display_role_selection() {
	var main_div = document.getElementById('main');
	main_div.parentNode.style.margin = '0px';
	main_div.style.height = '100%';

	var welcome = create_element('div', null, null, 'Please choose', main_div);
	welcome.style.fontSize = '50px';
	welcome.style.textAlign = 'center';
	welcome.style.margin = '50px';

	var select_div = create_element('div', null, null, '', main_div);
	select_div.style.textAlign = 'center';
	var select_table = create_element('table', null, null, '', select_div);
	select_table.style.margin = '0 auto';
	var tr = create_element('tr', null, null, '', select_table);
	var customer_td = create_element('td', null, null, '', tr);
	var customer_div = create_element('div', null, null, '', customer_td);
	
	var translator_td = create_element('td', null, null, '', tr);
	var translator_div = create_element('div', null, null, '', translator_td);
}