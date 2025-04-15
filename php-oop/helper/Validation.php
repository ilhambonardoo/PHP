<?php

function validateLoginRequest(LoginRequest $_request)
{
    if (!isset($_request->username)) {
        throw new ValidationException("Username is NULL");
    } else if (!isset($_request->password)) {
        throw new ValidationException("Password is NULL");
    } else if (trim($_request->username) == "") {
        throw new Exception("Username is EMPTY");
    } else if (trim($_request->password) == "") {
        throw new Exception("Password is EMPTY");
    }
}
