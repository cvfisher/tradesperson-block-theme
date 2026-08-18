console.log("header scroll file loaded");

const header = document.querySelector(".header");

if (header) {
	function updateHeaderHeight() {
		document.documentElement.style.setProperty(
			"--header-height",
			`${header.offsetHeight}px`,
		);

		console.log("Header height:", header.offsetHeight);
	}

	function handleScroll() {
		header.classList.toggle("scrolled", window.scrollY > 50);
		updateHeaderHeight();
	}

	updateHeaderHeight();
	handleScroll();

	window.addEventListener("scroll", handleScroll);
	window.addEventListener("resize", updateHeaderHeight);
}
