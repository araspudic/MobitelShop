$(window).on("load", function () {
    $(".loader-wrapper, .loader").fadeOut(2000);
    
});
app.get('/', function (req, res) {
    res.render('index', {});
  });