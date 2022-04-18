let name = document.getElementById('fullName');
let password = document.getElementById('password');
let form = document.getElementById('form');
let errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = []
    if(name.value === '' || name.value == null){
        messages.push('Name is invalid')
    }

    if(password.value.length <= 6){
        messages.push('Password must be longer than 6 characters')
    }
    if(messages.length > 0){
        e.preventDefault
        errorElement.innerText = messages.join(', ')
    }
});

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}