import React from 'react';
import ReactDOM from 'react-dom/client';

function Register() {
  return (
    <div>
      <div className="login">
        <p className="sign-in">Sign Up</p>
        <form method="post" action="registration">
          <label>Name</label>
          <input type="text" name="name" />
          <label>Email Address</label>
          <input type="email" name="email" />
          <label>Password</label>
          <input type="password" name="password" />
          <p>
            Already have an account? <a href="./">Sign in</a>
          </p>
          <button>Register</button>
        </form>
      </div>
    </div>
  );
}

export default Register;

if (document.getElementById('register')) {
    const Index = ReactDOM.createRoot(document.getElementById("register"));

    Index.render(
        <React.StrictMode>
            <Register/>
        </React.StrictMode>
    )
}