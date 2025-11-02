// ===========================
// TriplyDeal - deals.js
// Handles filtering and sorting deals
// ===========================

document.addEventListener('DOMContentLoaded', () => {
  const dealList = document.getElementById('deal-list');
  const filterSelect = document.getElementById('deal-filter');
  const sortSelect = document.getElementById('deal-sort');

  if (!dealList) return;

  const deals = Array.from(dealList.children);

  // --- Filter Deals ---
  if (filterSelect) {
    filterSelect.addEventListener('change', () => {
      const type = filterSelect.value;
      deals.forEach(deal => {
        if (type === 'all' || deal.dataset.type === type) {
          deal.style.display = 'block';
        } else {
          deal.style.display = 'none';
        }
      });
    });
  }

  // --- Sort Deals by Price ---
  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      const order = sortSelect.value;
      const sorted = deals.sort((a, b) => {
        const priceA = parseFloat(a.dataset.price);
        const priceB = parseFloat(b.dataset.price);
        return order === 'asc' ? priceA - priceB : priceB - priceA;
      });

      // Re-append sorted deals
      sorted.forEach(deal => dealList.appendChild(deal));
    });
  }
});
