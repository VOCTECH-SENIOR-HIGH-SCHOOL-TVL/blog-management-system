document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the default form submission
    performSearch(); // Call your search function here
});

let scrollPosition = 0;

function performSearch() {
    scrollPosition = window.scrollY; // Save current scroll position
    // Your AJAX call to fetch search results
    fetchSearchResults().then(() => {
        window.scrollTo(0, scrollPosition); // Restore scroll position
    });
}

function fetchSearchResults() {
    return new Promise((resolve, reject) => {
        const query = document.getElementById('searchInput').value;
        fetch(`/search?query=${query}`)
            .then(response => response.json())
            .then(data => {
                displayResults(data); // Function to display results
                resolve();
            })
            .catch(error => {
                console.error('Error fetching search results:', error);
                reject(error);
            });
    });
}

function displayResults(data) {
    const resultsContainer = document.getElementById('resultsContainer');
    resultsContainer.innerHTML = ''; // Clear previous results
    data.forEach(item => {
        const resultItem = document.createElement('div');
        resultItem.textContent = item.title; // Adjust based on your data structure
        resultsContainer.appendChild(resultItem);
    });
}