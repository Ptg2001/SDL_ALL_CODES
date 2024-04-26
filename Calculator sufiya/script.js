function appendToDisplay(value) {
    document.getElementById('display').value += value;
  }
  
  function clearDisplay() {
    document.getElementById('display').value = '';
  }
  
  function calculate() {
    try {
      var input = document.getElementById('display').value;
      
      if (input.includes('/0')) {
        throw new Error('Cannot divide by zero');
      }
  
      var result = eval(input);
  
      if (isNaN(result) || !isFinite(result)) {
        throw new Error('Invalid input');
      }
  
      document.getElementById('display').value = result;
    } catch (error) {
      alert('Error: ' + error.message);
    }
  }
  