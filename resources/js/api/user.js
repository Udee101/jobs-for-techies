import http from '../http';
import { getHeader, getUserId } from './config';

const getUser = () => http.get(`/api/v1/users/${getUserId()}`, getHeader());

const updateUser = (data) => http.post(`api/v1/users/${getUserId()}`, data, getHeader());

export { getUser, updateUser }
