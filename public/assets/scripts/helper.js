function getPath() {
    url = window.location.pathname.split( '/' );
    console.log(url)
}
getPath();

function getView(u_path) {
    $.ajax({
        type: "GET",
        url: u_path,
        dataType: "html",
        cache: !1,
        async: !1,
        beforeSend: function() {
            $("body > div").not("#wrapper, .pace").remove(), $.mainView.css({
                opacity: 0
            })
        },
        success: function(data) {
            $('#main-view').html(data).delay(250).animate({
                opacity: 1
            })
        },
        error: function() {}
    })
}