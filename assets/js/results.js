// ===========================
// TriplyDeal - results.js
// Handles search results filtering & sorting
// ===========================

document.addEventListener('DOMContentLoaded', () => {
  const resultsList = document.getElementById('results-list');
  const sortSelect = document.getElementById('results-sort');
  const starsSelect = document.getElementById('results-stars');

  if (!resultsList) return;

  const results = Array.from(resultsList.children);

  // --- Sort Results by Price ---
  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      const order = sortSelect.value;
      const sorted = results.sort((a, b) => {
        const priceA = parseFloat(a.dataset.price);
        const priceB = parseFloat(b.dataset.price);
        return order === 'asc' ? priceA - priceB : priceB - priceA;
      });
      sorted.forEach(res => resultsList.appendChild(res));
    });
  }

  // --- Filter Hotels by Stars ---
  if (starsSelect) {
    starsSelect.addEventListener('change', () => {
      const stars = starsSelect.value;
      results.forEach(res => {
        const resStars = res.dataset.stars || '';
        if (stars === 'all' || resStars === stars) {
          res.style.display = 'block';
        } else {
          res.style.display = 'none';
        }
      });
    });
  }
});
