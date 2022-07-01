import React, { useState } from "react";

import './LoginForm.css';

function LoginForm() {

    return (
        <div className="container">
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
            <div className="logo">
                <div className="__logo">
                    <a className="logo" href="./"><i class="fa-solid fa-utensils"></i><span className="nhoam-logo">Nhoàm</span></a>
                    <span>restaurant</span>
                </div>
            </div>
        </div>
    )

}

export default LoginForm;