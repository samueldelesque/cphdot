VoltCase = Backbone.Marionette.Layout.extend({
	tagName: "div",
	id: "VoltCase",
	template: "#voltcase_tpl",
	route:"",
	
	initialize: function(d){
		//this.listenTo(this.model, 'change', this.render);
	},
	
    render: function(){
		var that = this;
        var template = Handlebars.compile($(this.template).html());
		this.$el.html(template({}));
		activate(this.$el);
    }
});