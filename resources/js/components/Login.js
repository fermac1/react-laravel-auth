// resources/js/components/Login.js

import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Login extends Component {
    render(){

        return (
            <div>
                <div className="login">
                <p className="sign-in">Sign In</p>
                <form method="post" action="login">
                    <label>Email Address</label>
                    <input type="email" name="email"/>
                    <label>Password</label>
                    <input type="password" name="password"/>
                    <p>
                    Don't have an account? <a href="register">Sign up</a>
                    </p>
                    <button>Login</button>
                </form>
                </div>
            </div>
        );
    }
}

export default Login;


if (document.getElementById('login')) {
    ReactDOM.render(<Login />, document.getElementById('login'));
}