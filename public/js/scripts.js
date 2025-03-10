const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const backToSignIn = document.getElementById('backToSignIn');
const sendOtp = document.getElementById('sendOtp');
const container = document.getElementById('container');

// Toggle Sign-Up Form
signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

// Toggle Sign-In Form
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

// Open Forgot Password Form
forgotPasswordLink.addEventListener('click', (e) => {
    e.preventDefault();
    container.classList.add("forgot-password-active");
});

// Back to Sign In
backToSignIn.addEventListener('click', (e) => {
    e.preventDefault();
    container.classList.remove("forgot-password-active");
});

// Show OTP Form after sending OTP
sendOtp.addEventListener('click', (e) => {
    e.preventDefault();
    container.classList.add("otp-active");
});