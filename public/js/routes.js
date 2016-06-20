ROUTES = {
	
	DEFAULT	: 'home',

	home	: {
		title 	: 'Home',
		url		: 'views/home.html'
	},
	about	: {
		title 	: 'About',
		url		: 'views/about.html'
	},
	contact	: {
		title 	: 'Contact',
		url		: 'views/contact.php'
	},
		'contact/add' : {
			title 	: 'New Contact',
			url		: 'views/contactAdd.php'	
		},
		'contact/edit' : {
			title	: 'Edit Contact',
			url		: 'views/contactEdit.php'
		},
		'contact/delete' : {
			directUrl : 'contacts.destroy'
		},
	sitemap	: {
		title 	: 'Sitemap',
		url		: 'views/sitemap.html'
	}
}