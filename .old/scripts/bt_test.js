$(document).ready(function () {
  $("#dropdownMenuButton").on("click", function () {
    $(this).next(".dropdown-menu").toggleClass("show");
  });
});
