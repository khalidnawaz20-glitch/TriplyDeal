// ===========================
// TriplyDeal - search.js
// Handles flight/hotel form interactions
// ===========================

document.addEventListener('DOMContentLoaded', () => {
  const tripRadios = document.querySelectorAll('input[name="trip"]');
  const returnDateDiv = document.getElementById('return-date');
  const addLegBtn = document.getElementById('add-leg');
  const flightLegsDiv = document.getElementById('flight-legs');
  const flightForm = document.getElementById('flight-form');
  const hotelForm = document.getElementById('hotel-form');
  const toggleLink = document.getElementById('toggle-search-type');

  // --- Show/hide return date & add-leg button based on trip type ---
  tripRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (radio.value === 'roundtrip') {
        returnDateDiv.classList.remove('hidden');
        addLegBtn.classList.add('hidden');
      } else if (radio.value === 'multi') {
        returnDateDiv.classList.add('hidden');
        addLegBtn.classList.remove('hidden');
      } else {
        returnDateDiv.classList.add('hidden');
        addLegBtn.classList.add('hidden');
      }
    });
  });

  // --- Add flight leg ---
  addLegBtn.addEventListener('click', () => {
    const legDiv = document.createElement('div');
    legDiv.classList.add('flight-leg');
    legDiv.innerHTML = `
      <input type="text" name="origin[]" placeholder="Origin" required>
      <input type="text" name="destination[]" placeholder="Destination" required>
      <input type="date" name="depart_date[]" required>
      <button type="button" class="remove-leg btn">✖ Remove</button>
    `;
    flightLegsDiv.appendChild(legDiv);

    // Remove leg
    legDiv.querySelector('.remove-leg').addEventListener('click', () => {
      flightLegsDiv.removeChild(legDiv);
    });
  });

  // --- Toggle flight/hotel forms ---
  toggleLink.addEventListener('click', (e) => {
    e.preventDefault();
    flightForm.classList.toggle('hidden');
    hotelForm.classList.toggle('hidden');
    toggleLink.textContent = flightForm.classList.contains('hidden')
      ? 'Looking for flights?'
      : 'Looking for hotels?';
  });
});
