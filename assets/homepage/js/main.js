var background = {}

	background.initializr = function (){

		var $this = this;

    //option
    $this.id = "background_css3";
    $this.style = {stroke_width:0, stroke_color :"black"};
    $this.bubbles_number = 6;
    $this.speed = [1500,3000]; //milliseconds
    $this.max_bubbles_height = $this.height;
    $this.shape = false // 1 : circle | 2 : triangle | 3 : rect | false :random
    
    if($("#"+$this.id).lenght > 0){
    	$("#"+$this.id).remove();
    }
    $this.object = $("<div style='background: linear-gradient(#a6d2eb, #a7d3ec, #c2f9fe); z-index:-1; margin:0; padding:0; overflow:hidden; position:absolute; bottom:0' id='"+$this.id+"'> </div>'").appendTo("body");
    
    $this.ww = $(window).width();
    $this.wh = $(window).height()*2;
    $this.width = $this.object.width($this.ww);
    $this.height = $this.object.height($this.wh);
    
    $("body").prepend("<style>.shape_background {transform-origin:center; width:193.65px; height:189.35px; position: absolute;}</style>");
    
    for (i = 0; i < $this.bubbles_number; i++) {
    	$this.generate_bubbles()
    }
  }

  background.generate_bubbles = function() {
   var $this = this;
   var base = $("<div class='shape_background'></div>");
   var shape_type = $this.shape ? $this.shape : Math.floor($this.rn(1,4));
   if(shape_type == 1) {
    var bolla = base.css({"background": "url(assets/homepage/image/Green.png)"});
  }else if (shape_type == 2){
    var bolla = base.css({"background": "url(assets/homepage/image/Orange.png)"});
  }else if (shape_type == 3){
    var bolla = base.css({"background": "url(assets/homepage/image/Pink.png)"});
  }else{
    var bolla = base.css({"background": "url(assets/homepage/image/Red.png)"});
  }    
  var rn_size = $this.rn(.8,1.2);
  bolla.css({"transform":"scale("+rn_size+") rotate("+$this.rn(-360,360)+"deg)", top:$this.wh+100, left:$this.rn(-60, $this.ww+60)});        
  bolla.appendTo($this.object);
  bolla.transit({top: $this.rn($this.wh/2,$this.wh/2-60), "transform":"scale("+rn_size+") rotate("+$this.rn(-360,360)+"deg)", opacity: 0},$this.rn($this.speed[0],$this.speed[1]), function(){
    $(this).remove();
    $this.generate_bubbles();
  })

}

background.rn = function(from, to, arr) {
 if(arr){
  return Math.random() * (to - from + 1) + from;
}else{
  return Math.floor(Math.random() * (to - from + 1) + from);
}
}
background.initializr()