import http from '../http';
import { getHeader } from './config';

const createJobListing = (data) => http.post('api/v1/listings/create', data, getHeader())

const getJobListings = () => http.get('/api/v1/listings');

const getListing = (listingId) => http.get(`/api/v1/listings/${listingId}`);

const getUserListings = () => http.get('/api/v1/user/listings', getHeader());

const updateJobListing = (payload) => http.put(`/api/v1/user/listings/${payload.listingId}`, payload.data, getHeader());

const deleteJobListing = (listingId) => http.delete(`/api/v1/user/listings/${listingId}`, getHeader())

export {createJobListing, getJobListings, getListing, getUserListings, updateJobListing, deleteJobListing };
