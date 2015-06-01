PartnersView = Backbone.Marionette.Layout.extend({
	tagName: "div",
	id: "partners",
	template: "#partners_tpl",
	route:"",
	
	initialize: function(d){
		//this.listenTo(this.model, 'change', this.render);
	},
	
    render: function(){
		var that = this;
        var template = Handlebars.compile($(this.template).html());
		this.$el.html(template({partners:[
			{logo:"/clients/cphdot/0.2/img/LAA-white.png",about:"Light Architect is a digital and photography agency. ",name:"Light Architect"}
		]}));
		//this.model.toJSON()
		activate(this.$el);
    }
});