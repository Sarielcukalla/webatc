document.querySelector("#show-login").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".popup").classList.remove("active");
});
$('#add_to_card').click(function(Product) {
    debugger
    $.ajax({
        type: "POST",
        url: "./Search.php",
        data: { Product: Product }
    }).done(function(msg) {
        alert("Data Saved: " + msg);
    });
});