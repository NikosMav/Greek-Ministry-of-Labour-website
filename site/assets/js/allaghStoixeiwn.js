document.getElementById("firstNameEditButton").addEventListener("click", function () {
    document.getElementById("firstName").toggleAttribute('readonly');
});


document.getElementById("lastNameEditButton").addEventListener("click", function () {
    document.getElementById("lastName").toggleAttribute('readonly');
});

document.getElementById("userNameEditButton").addEventListener("click", function () {
    document.getElementById("userName").toggleAttribute('readonly');
});


document.getElementById("emailEditButton").addEventListener("click", function () {
    document.getElementById("email").toggleAttribute('readonly');
});


document.getElementById("phoneEditButton").addEventListener("click", function () {
    document.getElementById("phone").toggleAttribute('readonly');
});