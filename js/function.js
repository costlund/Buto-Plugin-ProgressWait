function PluginProgressWait(){
  this.run = function(data){
    if(!data.seconds){
      alert('Param seconds is missing.');
    }
    if(!data.script){
      alert('Param script is missing.');
    }
    if(!data.id){
      alert('Param id is missing.');
    }
    function move() {
      var elem = document.getElementById(data.id); 
      var i = 1;
      var id = setInterval(frame, 100);
      function frame() {
          if (i >= (data.seconds*10)) {
              clearInterval(id);
              eval(data.script);
          } else {
              i++; 
              elem.setAttribute('value', i);
          }
      }
    }
    move();
  }
}
var PluginProgressWait = new PluginProgressWait();
