$(document).ready(function () {
    $("#gosterBtn").click(function () {
        if ($("#sifre").attr("type") == "password") {
            $("#sifre").attr("type", "text");
            $("#gosterBtn").text("Gizle");
        } else {
            $("#sifre").attr("type", "password");
            $("#gosterBtn").text("Göster");
        }
    });
});