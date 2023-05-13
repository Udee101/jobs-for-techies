import http from '../http';
import { getHeader } from './config';

const getJobListings = () => http.get('/api/v1/listings');

const getListing = (listingId) => http.get(`/api/v1/listings/${listingId}`)

const getUserListings = () => http.get('/api/v1/user/listings', getHeader());

export { getJobListings, getListing, getUserListings };
