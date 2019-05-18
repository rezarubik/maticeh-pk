$(document).ready(function () {

    $("#select-provinsi").change(function () {
        var selected_option = $('#select-provinsi option:selected');

        if (this.value == "DKI Jakarta") {
            $("#jawaBarat").hide();
            $("#jawaTengah").hide();
            $("#dkiJakarta").show();
        } else if (this.value == "Jawa Barat") {
            $("#jawaBarat").hide();
            $("#jawaTengah").hide();
            $("#dkiJakarta").show();
        } else if (this.value == "Jawa Tengah") {
            $("#dkiJakarta").hide();
            $("#jawaBarat").hide();
            $("#jawaTengah").show();
        }
    });
});

function resetFunction() {
    $("#default").show();
    $("#dkiJakarta").hide();
    $("#jawaBarat").hide();
    $("#jawaTengah").hide();
    // document.getElementById("form-registrasi").reset();
}
