document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll(".fade-in:not(input)");
    elements.forEach(function(el) {
        el.classList.add("active");
    });

    setTimeout(function() {
        var fadeOutElements = document.querySelectorAll(".fade-in:not(input)");
        fadeOutElements.forEach(function(el) {
            el.classList.remove("active");
            el.classList.add("fade-out");
        });
    }, 5000); // Adjust the delay (5000 milliseconds = 5 seconds)
});
