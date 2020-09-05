$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

document.addEventListener('DOMContentLoaded', function() {
    console.log("yes");
    // var img = document.createElement("img")
    // img.src="/assets/img/ads/_IIDE.png";
    // img.className="img-responsive center-block getSrc";
    // var div = document.getElementById("popupad");
    // div.append(img)
    document.getElementById("popbtn").click();
}, false);