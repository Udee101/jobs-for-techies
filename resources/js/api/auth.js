import http from '../http';
import { getHeader } from './config';

const login = (data) => http.post('/api/v1/login', data)

const logout = async () => {
  localStorage.removeItem('jft_jwt');
  localStorage.removeItem('jft_user');
}

const register = (data) => http.post('/api/v1/register', data)

export { login, register , logout}