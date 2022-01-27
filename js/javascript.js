
let projectTitle = 'Hostel Managemrnt System';

document.getElementById('buttonLogin').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'flex';
});
document.getElementById('buttonRegister').addEventListener('click', function () {
    document.querySelector('.bg-modal-reg').style.display = 'flex';
});

document.getElementById('close').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'none';
});

document.getElementById('close').addEventListener('click', function() {
    document.querySelector('.bg-modal-reg').style.display = 'none';
});
