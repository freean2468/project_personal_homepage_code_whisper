function Show(node) {
    var that = this;
    that.node = node;
    that.frequency = 3000;
    that.position = -1;
    that.progress = (function () {
      var slides = that.node.querySelectorAll(".slide");
      that.position = (that.position + 1) % slides.length;
      for(var i=0; i<slides.length;i++)
      {
        var slide = slides[i];
        if(i<that.position)
          slide.style.left = '-100%';
        else if(i==that.position)
          slide.style.left = 0;
        else
          slide.style.left = '100%';
      }
      that.start();
    });
    that.stop = (function (event) {
        clearTimeout(that.current_timer);
        that.current_timer = null;
    });
    that.start = (function (event) {
        that.current_timer = setTimeout(that.progress, that.frequency);
    });
    that.node.onmouseover = that.stop;
    that.node.onmouseout = that.start;
    that.current_timer = null;
    that.start();
    return that;
}

function install(root) {
    var slideshows = root.querySelectorAll(".slideshow");
    var shows = [];
    for (var si=0;si<slideshows.length;si++){
      console.log(si);
      shows.push(new Show(slideshows[si]));
    }
    return shows;
}

window.onload = ( function(){
    window.slide_shows = install(document);
});