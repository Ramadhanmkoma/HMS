
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

let message;

function helpCVV() {
    message = alert('CVV are three numbers that are found at the back right side of your credit card');

    message;
}

function changesInfo() {
    let message = alert('Sorry! The Service is Currently not available right now. Please wait for upcoming updates');
}

function specialClass() {

}

function economyClass() {
    
}


function btnLogin() {
    document.getElementById('buttonLogin').addEventListener('click', function () {
        document.querySelector('.bg-modal').style.display = 'flex';
    });
}

function bgClose() {
    document.getElementById('close').addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'none'; 
    });
}
