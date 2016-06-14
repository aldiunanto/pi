APP = {

	run: function(){
		APP.Main.init();
	},
	Libs: {

		_loadContent: function(source){
			if(!source.url && !source.title && source.directUrl){
				APP.Main._handleDirectUrl(source.directUrl);
			}else{
				$($('body').attr('data-pjax-container')).load(source.url, function(){
					APP.Main._initializeFlashData();
				});

				$('title').html(source.title);
			}
		},
		_ajax: function(args){
			return $.ajax({
				type	: args.method,
				url		: args.url,
				async	: false,
				data	: args.data,
				cache	: false
			}).responseText;
		}

	},
	Main: {

		init: function(){
			this._initializeURL();
			this._pushState();
			this._backAndForward();
			this._initializeForm();
			this._pjaxParams();
		},
		_checkAndLoad: function(currRoute){
			if(typeof currRoute !== 'undefined'){
				APP.Libs._loadContent(currRoute);
			}else{
				console.log('You must assign to the ROUTES first!');
			}
		},
		_initializeURL: function(){
			var currUrl = document.URL.split('#/');
			var toLoad	= ((currUrl.length > 1) ? ROUTES[currUrl[1]] : ROUTES[ROUTES.DEFAULT]);

			this._checkAndLoad(toLoad);
		},
		_initializeForm: function(){
			$('body').on('submit', 'form[data-pjax-form="enable"]', function(e){
				e.preventDefault();
				var data = JSON.parse(APP.Libs._ajax({
					method	: $(this).attr('method'),
					url 	: CONFIG.baseUrl + 'app/actions/' + $(this).attr('action'),
					data 	: $(this).serialize()
				}));

				if(data['data-pjax-feed'].message){
					localStorage.setItem(data['data-pjax-feed'].message, true);
				}
				if(data['data-pjax-feed'].redirect){
					window.location.href = CONFIG.baseUrl + '#/' + data['data-pjax-feed'].redirect;
				}
			});
		},
		_initializeFlashData: function(){
			$('[data-pjax-message]').hide();
			$('[data-pjax-message]').each(function(){
				var curr = $(this).attr('data-pjax-message');
				if(localStorage.getItem(curr)){
					$(this).show();
					localStorage.removeItem(curr);
				}
			});
		},
		_pushState: function(){
			var ob = this;
			$('body').on('click', 'a', function(e){
				var href = $(this).attr('href').split('/');
				ob._checkAndLoad(ROUTES[href[1]]);
			});
		},
		_backAndForward: function(){
			window.onpopstate = function(e){
				APP.Main._initializeURL();
			};
		},
		_pjaxParams: function(){
			$('body').on('click', '[data-pjax-params]', function(e){
				e.preventDefault();
				var obj =  {};

				$(this).attr('data-pjax-params').split(',').forEach(function(sp){
					var cur = sp.split(':');
					obj[cur[0]] = cur[1];
				});

				APP.Libs._ajax({
					method	: 'post',
					url 	: CONFIG.baseUrl + 'system/pjaxParamsControl.php',
					data 	: obj
				});

				window.location.href = CONFIG.baseUrl + $(this).attr('href');
			});
		},
		_handleDirectUrl: function(toUrl){
			var data = JSON.parse(APP.Libs._ajax({
				method	: 'post',
				url 	: CONFIG.baseUrl + 'app/directs/' + toUrl,
				data 	: null
			}));

			if(data['data-pjax-feed'].message){
				localStorage.setItem(data['data-pjax-feed'].message, true);
			}
			if(data['data-pjax-feed'].redirect){
				window.location.href = CONFIG.baseUrl + '#/' + data['data-pjax-feed'].redirect;
			}
		}

	}

};

$(APP.run);