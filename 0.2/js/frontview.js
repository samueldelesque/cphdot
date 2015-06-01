FrontView = Backbone.Marionette.Layout.extend({
	tagName: "div",
	id: "front",
	template: "#front_tpl",
	route:"",
	
	initialize: function(d){
		//this.listenTo(this.model, 'change', this.render);
	},
	
    render: function(){
		var that = this;
        var template = Handlebars.compile($(this.template).html());
		this.$el.html(template({}));
		//this.model.toJSON()
		activate(this.$el);
		
		$(window).bind("scroll",function(e){
			if($(document).scrollTop() > ($(".content").offset().top - $(window).height()) && $(".slider").is(":visible")){
				$(".slider").fadeOut();
			}
			if($(document).scrollTop() > ($(".content").offset().top) && $("#arrow").is(":visible")){
				$("#arrow").fadeOut();
			}
			if($(document).scrollTop() < ($(".content").offset().top - $(window).height()) && $(".slider").is(":hidden")){
				$(".slider").fadeIn();
			}
			if($(document).scrollTop() < ($(".content").offset().top) && $("#arrow").is(":hidden")){
				$("#arrow").fadeIn();
			}
		});
		
		$("#arrow",this.$el).click(function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop: $(".content").offset().top},'slow'); 
		});
    }
});