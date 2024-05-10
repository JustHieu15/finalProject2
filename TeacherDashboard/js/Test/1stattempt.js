
document.addEventListener('DOMContentLoaded', function() {
    const div1 = document.getElementById('div1');
    const toolbar1 = document.getElementById('toolbar1');
    toolbar1.style.top = div1.offsetTop + 'px'; // Set initial position next to div1

    document.querySelectorAll('.content').forEach(div => {
        div.addEventListener('click', function() {
            toolbar1.style.top = this.offsetTop + 'px'; // Move toolbar to the clicked div
        });
    });
});