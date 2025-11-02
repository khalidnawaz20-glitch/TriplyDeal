// ===========================
// TriplyDeal - packages.js
// Handles filtering and sorting packages
// ===========================

document.addEventListener('DOMContentLoaded', () => {
  const packageList = document.getElementById('package-list');
  const filterSelect = document.getElementById('package-filter');
  const sortSelect = document.getElementById('package-sort');

  if (!packageList) return;

  const packages = Array.from(packageList.children);

  // --- Filter Packages ---
  if (filterSelect) {
    filterSelect.addEventListener('change', () => {
      const category = filterSelect.value;
      packages.forEach(pkg => {
        if (category === 'all' || pkg.dataset.category === category) {
          pkg.style.display = 'block';
        } else {
          pkg.style.display = 'none';
        }
      });
    });
  }

  // --- Sort Packages by Price ---
  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      const order = sortSelect.value;
      const sorted = packages.sort((a, b) => {
        const priceA = parseFloat(a.dataset.price);
        const priceB = parseFloat(b.dataset.price);
        return order === 'asc' ? priceA - priceB : priceB - priceA;
      });

      // Re-append sorted packages
      sorted.forEach(pkg => packageList.appendChild(pkg));
    });
  }
});
