
//returns random rgb color code. Ex: (255, 0, 0)
function getRandomColor() {
  var colorR = Math.floor((Math.random() * 256));
  var colorG = Math.floor((Math.random() * 256));
  var colorB = Math.floor((Math.random() * 256));

  return "(" + colorR + "," + colorG + "," + colorB + ")"

};

$(document).ready(function() {
  $('#rombo').click(function() {
    var color = getRandomColor();

    //passes picked color code with post request
    $.post("update.php", {
      color_code:color,
    }, function(data, status) {
      console.log(status);
    });

    //changes rhombus' color to the picked one
    $(this).css('background', "rgb"+color);

  })
});
