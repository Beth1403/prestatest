document.getElementById('error-report-button').addEventListener('click', function() {
    e.preventDefault();
  
  $('#error-report-modal').modal('show');

  // Fermer la modale
  $('#error-report-modal').modal('hide');
  
  // Afficher un message à la place du bouton
  var button = document.getElementById('error-report-button');
  button.textContent = 'Merci pour votre signalement !';
  button.disabled = true;

  
});

