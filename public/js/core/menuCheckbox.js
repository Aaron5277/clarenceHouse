(function(){

var menuCheckbox     =   function( $menuCheckbox ){
    this.$html  =   $menuCheckbox;
    return this.init();
};
     
menuCheckbox.prototype   =   {
	id :'',
    $menu_key:'',
    hasChild:false,
	$checkbox :{},
  	$description:{},
    $childSelection:{},
    
    init:                   function(){
    	this.$checkbox =  this.$html.find('input');
        this.$menu_key = this.$checkbox.attr('menu-key')+'-des';
        this.$description = $( '.' + this.$menu_key );
        this.hasChild   = this.$checkbox.attr('has-child') ? true : false;

        if(this.hasChild){
            this.$childSelection =  $( '.' + this.$checkbox.attr('menu-key') + '-child' );//gaikkkkk
        }


        this.initEventHandlers();
    },

    initEventHandlers:      function(){
        this.$checkbox.on('click',$.proxy(this.showDescription, this));
    },

	showDescription:                    function(){
        console.log('showDescription');

	  	if( this.$checkbox.is( ':checked' ) ){
            this.$description.removeClass('hidden');

            if( this.hasChild ){
                this.showChildren();
            }
		}
	    else{
            this.$description.addClass('hidden');
            if( this.hasChild ){
                this.hideChildren();
            }
	    }
    },

    showChildren:function(){
        console.log('showChildren');

        this.$childSelection.removeClass( 'hidden' );
    },

    hideChildren:function(){
        console.log( 'hideChildren' );

        var $domItems  = this.$childSelection.find('input');
        len        =       $domItems.length;
 
        while(len--){
            console.log($domItems.eq(len));
           $domItems.eq(len).attr('checked',false);
           $domItems.eq(len).prop('checked', false);;
        }

        this.$childSelection.addClass( 'hidden' );

    }

}

var findmenuCheckbox     =       function(){
	 var $domItems  =       $('.menuCheckbox');
         len        =       $domItems.length;
 
    while(len--){
        new menuCheckbox( $domItems.eq(len) ) ;
    }
}

var init = function(){
	findmenuCheckbox();
}

$(init);

})()