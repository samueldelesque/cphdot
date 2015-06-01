ProductsView = Backbone.Marionette.Layout.extend({
	tagName: "div",
	id: "products",
	template: "#products_tpl",
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
		//this.$el.find('img').on('load', function() {that.$el.find(".products").freetile({animate: true,elementDelay: 10});});
    }
});