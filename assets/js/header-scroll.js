console.log("header scroll file loaded");
document.addEventListener("scroll", function () {
	const header = document.querySelector(".header");

	if (!header) return;

	if (window.scrollY > 50) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
});
