<script>
    // Add basic search functionality
    const searchInput = document.querySelector('input[type="text"]');
    const tableRows = document.querySelectorAll('tbody tr');

    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        
        tableRows.forEach(row => {
            const productName = row.querySelector('td:first-child').textContent.toLowerCase();
            const sku = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            
            if (productName.includes(searchTerm) || sku.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>