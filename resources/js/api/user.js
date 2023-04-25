import http from '../http';
import { getHeader, getUserId } from './config';

const getUser = () => http.get(`/api/v1/users/${getUserId()}`, getHeader());

export { getUser }