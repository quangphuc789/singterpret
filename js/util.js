function create_element(tag, id, classname, html, parent) {
	if (tag != null) {
		var dom = document.createElement(tag);
		if (id != null) {
			dom.id = id;
		}
		if (classname != null) {
			dom.className = classname;
		}
		if (html != null) {
			dom.innerHTML = html;
		}
		if (parent != null) {
			parent.appendChild(dom);
		}
		return dom;
	}
}

var language_list = [
	{
		name: 'English',
		text: 'English',
		img : '_England',
		code: 'en',
	},
	{
		name: 'French',
		text: 'Fran&#x00E7;ais',
		img : 'fr',
		code: 'fr',
	},
	{
		name: 'German',
		text: 'Deutsche',
		img : 'de',
		code: 'de',
	},
	{
		name: 'Spain',
		text: 'Espa&#x00F1;ol',
		img : 'es',
		code: 'es',
	},
	{
		name: 'Chinese',
		text: '&#x4E2D;&#x6587;',
		img : 'cn',
		code: 'cn',
	},
	{
		name: 'Cantonese',
		text: '&#x5EE3;&#x6771;&#x8A71;',
		img : 'hk',
		code: 'hk',
	},
	{
		name: 'Korean',
		text: '&#xD55C;&#xAD6D;&#xC5B4;',
		img : 'kr',
		code: 'kr',
	},
	{
		name: 'Japanese',
		text: '&#x65E5;&#x672C;&#x8A9E;',
		img : 'jp',
		code: 'jp',
	},
	{
		name: 'Thai',
		text: '&#x0E20;&#x0E32;&#x0E29;&#x0E32;&#x0E44;&#x0E17;&#x0E22;',
		img : 'th',
		code: 'th',
	},
	{
		name: 'Vietnamese',
		text: 'Ti&#x1EBF;ng Vi&#x1EC7;t',
		img : 'vn',
		code: 'vn',
	},
	{
		name: 'Bahasa',
		text: 'Bahasa',
		img : 'id',
		code: 'id',
	},
	{
		name: 'Filipino',
		text: 'Pilipino',
		img : 'ph',
		code: 'ph',
	}
]