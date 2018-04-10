// Get Modal Element
var modal = document.getElementById('simpleModal');
// Get open Modal button
var modalBtn = document.getElementById('modalBtn');
// Get Close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listen for open click
modalBtn.addEventListener('click', openModal);

// Listen for close click
closeBtn.addEventListener('click', closeModal);

// Listen for outside Click
window.addEventListener('click', clickOutside);

// Function to open Modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close Modal
function closeModal() {
  modal.style.display = 'none';
}

// Function to close Modal if outside
function clickOutside(e) {
  if (e.target == modal) {
  modal.style.display = 'none';
 }
}
