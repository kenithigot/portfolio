function scrollToAboutMe() {
    const aboutMeSection = document.getElementById("aboutMe");
    const offset = 40;

    if (aboutMeSection) {
        const elementPosition = aboutMeSection.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = elementPosition - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    }
}