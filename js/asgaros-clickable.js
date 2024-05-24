document.addEventListener('DOMContentLoaded', function() {
    // Function to make elements clickable
    function makeClickable(className) {
        const elements = document.querySelectorAll(className);
        elements.forEach(element => {
            const link = element.querySelector('a');
            if (link) {
                element.style.cursor = 'pointer';
                element.addEventListener('click', function() {
                    window.location.href = link.href;
                });
            }
        });
    }

    // Check and make clickable for .forum-name and .topic-name
    if (document.querySelector('.forum-name')) {
        makeClickable('.forum-name');
    }

    if (document.querySelector('.topic-name')) {
        makeClickable('.topic-name');
    }
});