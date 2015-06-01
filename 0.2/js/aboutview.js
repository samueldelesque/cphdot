AboutView = Backbone.Marionette.Layout.extend({
	tagName: "div",
	id: "about",
	template: "#about_tpl",
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
    }
});