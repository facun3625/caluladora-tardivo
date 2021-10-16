document.getElementById('range').addEventListener('input', function(e) {
  //this.title = this.value;
  document.getElementsByClassName('tooltiptext')[0].textContent = this.value;
})