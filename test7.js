document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach(slider => {
        const output = document.getElementById(`demo${slider.id.slice(-1)}`);
        slider.oninput = () => output.value = slider.value;
    });

    const caretButton = document.getElementById('caretButton');
    caretButton.addEventListener('click', () => caretButton.classList.toggle('active'));
});

function toggleSidebar() {
    const sidebar = document.getElementById("mySidebar");
    const overlay = document.getElementById("overlay");
    sidebar.style.left = "0";
    overlay.style.opacity = "0.5";
    overlay.style.pointerEvents = "auto";
}

function closeSidebar() {
    const sidebar = document.getElementById("mySidebar");
    const overlay = document.getElementById("overlay");
    sidebar.style.left = "-250px";
    overlay.style.opacity = "0";
    overlay.style.pointerEvents = "none";
}
