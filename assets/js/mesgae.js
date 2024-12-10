window.onload = function() {
    showNotification();
};

function showNotification() {
    const notification = document.getElementById('notification');
    notification.classList.remove('d-hidden');
    
    // Automatically hide the notification after 3 seconds
    setTimeout(function() {
        notification.style.opacity = '0';
        setTimeout(function() {
            notification.classList.add('d-hidden');
            notification.style.opacity = '1'; // Reset opacity for next show
        }, 500); // Wait for the fade-out transition to complete
    }, 3000);
};

function closeNotification() {
    const notification = document.getElementById('notification');
    notification.style.opacity = '0';
    
    setTimeout(() => {
        notification.classList.add('d-hidden');
        notification.style.opacity = '1'; // Reset opacity for next show
    }, 500); // Wait for the fade-out transition to complete
};
