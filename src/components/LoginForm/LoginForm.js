import React, { useState } from "react";

import './LoginForm.css';

function LoginForm() {

    return (
        <div className="login-form">
            <form>
                <div className="input-container">
                    <label>Enter username
                        <input
                        type="text" 
                        placeholder="username"
                        />
                    </label>
                </div>
                <div className="input-container">
                    <label>Enter password
                        <input
                        type="password"
                        placeholder="password"
                        />
                    </label>
                </div>
                <div className="check-box">
                    <label htmlFor="check-box-login">Keep signed in?</label>
                    <input
                    type="checkbox"
                    id="check-box-login"
                    />
                </div>
                <div className="button-container">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    )

}

export default LoginForm;