console.log("a")
$(document).ready(function () {
    $("#update").submit(function (e) {
        e.preventDefault();// untuk mencegah reload saat menekan tombol submit

        var formData = $(this).serialize();

        if (formData) {
            $.ajax({
                url: "update.php",
                type: "POST",
                data: formData,
                success: function (response) {
                    location.reload()
                }
            });
        } else {
            alert('data kosong');
        }
    });
});