/*
 *
 *	CPHDOT Site Router
 *
 */

app.addInitializer(function(options){
	
	app.container = new Backbone.Marionette.Region({
		el: "#page",
	});
	
	app.lightbox = new Backbone.Marionette.Region({
		el: "#lightbox",
	});
	
	app.lightboxel = $("#lightbox,#lightbox_bgd");
	app.lightboxel.hide();
	
	app.lightbox.on("show",function(){
		$("#lightbox").css("top",$(document).scrollTop()+20);
		app.lightboxel.fadeIn();
		activate(this.$el);
		$(document).bind("keydown",function(e) {
			if(e.keyCode == 27){
				app.lightbox.close();
			}
		});
	});
	$("#lightbox_bgd").click(function(){app.lightbox.close();});
	app.lightbox.on("close",function(){
		console.log("Closing LightBox");
		$(document).unbind("keydown");
		app.lightboxel.fadeOut();
		app.router.navigate("about", {trigger: true});
	});
	
	app.Router = Backbone.Router.extend({
		routes: {
			"": "front",
			"about":"about",
			"about/volt-case":"voltcase",
			"products":"products",
			"partners":"partners",
			"testimonials":"testimonials",
		},
		
		initialize: function () {
			
		},
		
		front: function(){
			app.container.currentView = "front";
			app.front = new FrontView({model:{}});
			app.container.show(app.front);
		},
		
		about: function(){
			app.container.currentView = "about";
			app.about = new AboutView({model:{}});
			app.container.show(app.about);
		},
		
		voltcase: function(){
			app.container.currentView = "about";
			app.about = new AboutView({model:{}});
			app.container.show(app.about);
			app.voltCase = new VoltCase();
			app.lightbox.show(app.voltCase);
		},
		
		products: function(){
			app.container.currentView = "products";
			app.products = new ProductsView({model:{}});
			app.container.show(app.products);
		},
		
		partners: function(){
			app.container.currentView = "partners";
			app.partners = new PartnersView();
			app.container.show(app.partners);
		},
		
		testimonials: function(){
			app.container.currentView = "testimonials";
			app.testimonials = new TestimonialsView();
			app.container.show(app.testimonials);
		},
		
	});
	app.router = new app.Router();
	
	if(app.pages){
		app.router.bind("all",function(route, router) {
			var r = route.split(":")[1];
			if(app.pages[r] != null){
				var page = app.pages[r];
				document.title = page.title;
				document.description = page.description;
				console.log("loading page "+r);
			}
		});
	}
	else{
		console.log("app.pages undefined, titles will not be updated.");
	}
	
	Backbone.history.start({pushState: true,trackDirection: true});
});