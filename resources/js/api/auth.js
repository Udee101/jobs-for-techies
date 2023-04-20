import http from '../http';

const login = (data) => http.post('/api/v1/login', data)

const register = (data) => http.post('/api/v1/register', data)

export { login, register }