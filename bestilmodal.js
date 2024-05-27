document.addEventListener("DOMContentLoaded", function() {
    // Function to get query parameters
    function getQueryParams() {
        const params = new URLSearchParams(window.location.search);
        return {
            bestil: params.get('bestil')
        };
    }

    // Get the query parameters
    const params = getQueryParams();

    // Check if 'bestil' equals '1' and open the modal
    if (params.bestil === "1") {
        // Open the modal using Bootstrap's modal method
        const bestilModal = new bootstrap.Modal(document.getElementById('bestilModal'));
        bestilModal.show();
    }
});